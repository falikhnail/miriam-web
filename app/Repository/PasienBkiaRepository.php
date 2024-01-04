<?php

namespace App\Repository;

use App\Helper\StringHelper;
use App\Http\Requests\PasienBkiaRequest;
use App\Http\Requests\PasienRequest;
use App\Models\Pasien;
use App\Models\PasienBkia;
use Carbon\Carbon;
use DB;
use Exception;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;

class PasienBkiaRepository {

    public function __construct(
        public PasienBkia $model,
        public ScheduleRepository $scheduleRepository
    ) {
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
            'dokter' => function ($q) {
                $q->select('id', 'nama');
            },
        ])
            ->orderBy('pasien_bkia.created_at', 'desc');

        if (!empty($nama) && strlen($nama) > 0) {
            $pasien->whereRaw("pasien_bkia.nama_lengkap_anak like '%$nama%'");
        }
        if (!empty($tglRegist) && strlen($tglRegist) > 0) {
            $pasien->whereRaw("pasien_bkia.date(created_at) = '$tglRegist'");
        }
        if (!empty($tglSchedule) && strlen($tglSchedule) > 0) {
            $pasien->whereRaw("pasien_bkia.schedule = '$tglSchedule'");
        }
        if (!empty($alamat) && strlen($alamat) > 0) {
            $pasien->whereRaw("pasien_bkia.alamat like '%$alamat%'");
        }
        if (!empty($noHp) && strlen($noHp) > 0) {
            $pasien->whereRaw("pasien_bkia.no_hp like '%$noHp%'");
        }
        if ($limit != null) {
            $pasien->limit($limit);
        }

        return $pasien;
    }

    public function getById($id) {
        try {
            $pasien = PasienBkia::findOrFail($id);
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

    public function store(PasienBkiaRequest $request) {
        DB::beginTransaction();
        try {
            $request['tempat_tanggal_lahir_anak'] = $request->tempat_lahir . ', ' . $request->tanggal_lahir;
            $request['no_hp'] = StringHelper::formatNoPonsel($request->no_hp);

            if (!$request->has('dokter_id') && $request->has('dokter')) {
                $request['dokter_id'] = $request->dokter;
            }

            $pasien = $this->model::create($request->except(
                'tempat_lahir',
                'tanggal_lahir'
            ));

            $pasien->save();

            $this->scheduleRepository->updateKuota(
                $pasien->schedule,
                $pasien->dokter_id,
                'pasien_bkia'
            );

            DB::commit();

            return $pasien;
        } catch (Throwable $e) {
            DB::rollBack();
            \Log::error('Error update >>> ' . $e->getMessage());
            throw new Exception($e->getMessage());
        }
    }

    public function update($id, PasienBkiaRequest $request) {
        DB::beginTransaction();
        try {
            $existing = $this->model::find($id);

            $ttl = $request->tempat_lahir . ', ' . $request->tanggal_lahir;
            if (!empty($request->tempat_lahir) && !empty($request->tanggal_lahir) && $existing->tempat_tanggal_lahir_anak != $ttl) {
                $request['tempat_tanggal_lahir_anak'] = $ttl;
            }

            $request['no_hp'] = StringHelper::formatNoPonsel($request->no_hp);

            $pasien = $existing->fill($request->all())->save();

            DB::commit();

            return $pasien;
        } catch (Throwable $e) {
            DB::rollBack();
            \Log::error('Error update >>> ' . $e->getMessage());
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
