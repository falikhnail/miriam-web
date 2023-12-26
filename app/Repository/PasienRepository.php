<?php

namespace App\Repository;

use App\Helper\StringHelper;
use App\Http\Requests\PasienRequest;
use App\Models\Pasien;
use Carbon\Carbon;
use DB;
use Exception;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;

class PasienRepository {

    protected $model;

    public function __construct(Pasien $model) {
        $this->model = $model;
    }
    public function getAll(
        $nama = '',
        $alamat = '',
        $noHp = '',
        $tglRegist = '',
        $tglSchedule = '',
        $limit = null
    ) {
        $pasien = $this->model::with([
            'schedule' => function ($q) {
                $q->select('id', 'tanggal');
            },
            'dokter' => function ($q) {
                $q->select('id', 'nama');
            },
        ])
            ->orderBy('pasien_umum.created_at', 'desc');

        if (!empty($nama) && strlen($nama) > 0) {
            $pasien->whereRaw("nama_lengkap like '%$nama%'");
        }
        if (!empty($tglRegist) && strlen($tglRegist) > 0) {
            $pasien->whereRaw("date(created_at) = '$tglRegist'");
        }
        if (!empty($tglSchedule) && strlen($tglSchedule) > 0) {
            $pasien->whereRaw("schedule = '$tglSchedule'");
        }
        if (!empty($alamat) && strlen($alamat) > 0) {
            $pasien->whereRaw("alamat like '%$alamat%'");
        }
        if (!empty($noHp) && strlen($noHp) > 0) {
            $pasien->whereRaw("no_hp like '%$noHp%'");
        }
        if ($limit != null) {
            $pasien->limit($limit);
        }

        return $pasien;
    }

    public function getById($id) {
        try {
            $pasien = Pasien::findOrFail($id);
        } catch (MethodNotFoundException $e) {
            $pasien = (object) [];
        }

        $ttl = explode(', ', $pasien->tempat_tanggal_lahir);
        $pasien->tempatLahir = null;
        $pasien->tglLahir = null;

        if (count($ttl) == 2) {
            $pasien->tempatLahir = $ttl[0];
            $pasien->tglLahir = $ttl[1];
        }

        $pasien->tglRegist = date('d/m/Y', strtotime($pasien->created_at));

        return $pasien;
    }

    public function getLimited($limit = 5) {
        return $this->getAll(null, null, null, null, null, $limit)->get();
    }

    public function getCount() {
        return $this->getAll()->count();
    }

    public function store(PasienRequest $request) {
        $request['tempat_tanggal_lahir'] = $request->tempat_lahir . ', ' . $request->tanggal_lahir;
        $request['no_hp'] = StringHelper::formatNoPonsel($request->no_hp);

        $pasien = $this->model::create($request->except([
            'tempat_lahir',
            'tanggal_lahir'
        ]));

        $pasien->save();

        return $pasien;
    }

    public function update($id, PasienRequest $request) {
        DB::beginTransaction();
        try {
            $existing = $this->model::find($id);

            $ttl = $request->tempat_lahir . ', ' . $request->tanggal_lahir;
            if (!empty($request->tempat_lahir) && !empty($request->tanggal_lahir) && $existing->tempat_tanggal_lahir_anak != $ttl) {
                $request['tempat_tanggal_lahir'] = $ttl;
            }

            $request['no_hp'] = StringHelper::formatNoPonsel($request->no_hp);

            $pasien = $existing->fill($request->all())->save();

            DB::commit();

            return $pasien;
        } catch (Throwable $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function delete($id) {
        DB::beginTransaction();
        try {
            $existing = $this->model::find($id);
            $existing->delete();

            DB::commit();

            return true;
        } catch (Throwable $e) {
            DB::rollBack();
            \Log::error('Error delete($id) >>> ' . $e->getMessage());
            throw new Exception($e->getMessage());
        }
    }
}
