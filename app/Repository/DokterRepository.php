<?php

namespace App\Repository;

use App\Exceptions\GeneralException;
use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use Carbon\Carbon;
use DB;
use Exception;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;

class DokterRepository {
    protected $model;

    public function __construct(Dokter $model) {
        $this->model = $model;
    }

    public function getAll(
        $nama = '',
        $status = '',
        $limit = null
    ) {
        $dokter = $this->model->orderBy('dokter.nama', 'asc');

        if (!empty($nama) && strlen($nama) > 0) {
            $dokter->whereRaw("nama like '%$nama%'");
        }
        if (!empty($status) && strlen($status) > 0) {
            $dokter->whereRaw("status = '$status'");
        }
        if ($limit != null) {
            $dokter->limit($limit);
        }

        return $dokter->get();
    }

    public function getById($id) {
        try {
            $dokter = $this->model::findOrFail($id);
        } catch (MethodNotFoundException $e) {
            throw new Exception('Dokter tidak ditemukan');
        }

        return $dokter;
    }

    public function getLimited($limit = 5) {
        return $this->getAll(null, null, $limit);
    }

    public function store(DokterRequest $request) {
        DB::beginTransaction();
        try {
            $this->model->nama = $request->nama;
            $this->model->status = $request->status;
            $this->model->save();

            DB::commit();

            return $this->model;
        } catch (Throwable $e) {
            DB::rollBack();
            \Log::error('Error store(DokterRequest $request) >>> ' . $e->getMessage());

            throw new GeneralException($e->getMessage());
        }
    }

    public function update($id, DokterRequest $request) {
        try {
            $this->model = $this->model::findOrFail($id);
        } catch (Throwable $e) {
            throw new Exception('Dokter tidak ditemukan');
        }

        $this->model->nama = $request->nama;
        $this->model->status = $request->status;
        $this->model->save();

        return $this->model;
    }

    public function delete($id) {
        DB::beginTransaction();
        try {
            $this->model = $this->model::findOrFail($id);
            $this->model->delete();

            DB::commit();

            return true;
        } catch (Throwable $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}
