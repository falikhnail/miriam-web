<?php

namespace App\Repository;

use App\Helper\StringHelper;
use App\Http\Requests\PasienVaksinRequest;
use App\Models\PasienVaksin;
use App\Models\Schedule;
use Carbon\Carbon;
use DB;
use Exception;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;

class PasienVaksinRepository {

    public function __construct(
        public PasienVaksin $model,
        public Schedule $schedule
    ) {
    }

    public function getAll(
        $namaAnak = '',
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
            ->orderBy('pasien_vaksin.created_at', 'desc');

        if (!empty($namaAnak) && strlen($namaAnak) > 0) {
            $pasien->whereRaw("pasien_vaksin.nama_lengkap_anak like '%$namaAnak%'");
        }
        if (!empty($tglRegist) && strlen($tglRegist) > 0) {
            $pasien->whereRaw("pasien_vaksin.date(created_at) = '$tglRegist'");
        }
        if (!empty($tglSchedule) && strlen($tglSchedule) > 0) {
            $pasien->whereRaw("pasien_vaksin.schedule = '$tglSchedule'");
        }
        if (!empty($alamat) && strlen($alamat) > 0) {
            $pasien->whereRaw("pasien_vaksin.alamat like '%$alamat%'");
        }
        if (!empty($noHp) && strlen($noHp) > 0) {
            $pasien->whereRaw("pasien_vaksin.no_hp like '%$noHp%'");
        }
        if ($limit != null) {
            $pasien->limit($limit);
        }

        return $pasien;
    }

    public function getById($id) {
        try {
            $pasien = PasienVaksin::findOrFail($id);
        } catch (MethodNotFoundException $e) {
            $pasien = (object) [];
        }

        $ttl = explode(', ', $pasien->tempat_tanggal_lahir_anak);
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

    public function store(PasienVaksinRequest $request) {
        DB::beginTransaction();
        try {
            $request['tempat_tanggal_lahir_anak'] = $request->tempat_lahir . ', ' . $request->tanggal_lahir;
            $request['schedule'] = $request->schedule;
            $request['dokter_id'] = $request->dokter;
            $request['no_hp'] = StringHelper::formatNoPonsel($request->no_hp);

            $pasienVaksin = $this->model::create($request->except([
                'schedule',
                'dokter'
            ]));

            $pasienVaksin->save();

            DB::commit();
            return $pasienVaksin;
        } catch (Throwable $e) {
            DB::rollBack();
            \Log::error('Error store(PasienVaksinRequest $request) >>> ' . $e->getMessage());
            throw new Exception($e->getMessage());
        }
    }

    public function update($id, PasienVaksinRequest $request) {
        DB::beginTransaction();
        try {
            $existing = $this->model::find($id);

            $ttl = $request->tempat_lahir . ', ' . $request->tanggal_lahir;
            if (!empty($request->tempat_lahir) && !empty($request->tanggal_lahir) && $existing->tempat_tanggal_lahir_anak != $ttl) {
                $request['tempat_tanggal_lahir_anak'] = $ttl;
            }

            $request['no_hp'] = StringHelper::formatNoPonsel($request->no_hp);

            $pasienVaksin = $existing->fill($request->all())->save();

            DB::commit();
            return $pasienVaksin;
        } catch (Throwable $e) {
            DB::rollBack();
            \Log::error('Error update(PasienVaksinRequest $request) >>> ' . $e->getMessage());
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

    public function storeWithQuota() {
        DB::transaction(function () {
        });
    }
}
