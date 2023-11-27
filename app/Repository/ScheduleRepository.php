<?php

namespace App\Repository;

use App\Exceptions\GeneralException;
use App\Http\Requests\ScheduleRequest;
use App\Models\Dokter;
use App\Models\Schedule;
use Carbon\Carbon;
use DB;
use Throwable;

class ScheduleRepository {


    public function __construct(public Schedule $model, public Dokter $dokter) {
    }

    public function getAll() {
        $schedule = $this->model::with('dokter:id,nama');

        return $schedule->get();
    }

    public function getEvents() {
        $schedule = [];
        $scheduleData = $this->getAll();

        if (!$scheduleData->isEmpty()) {
            foreach ($scheduleData as $value) {
                $schedule[] = [
                    'id' => $value->id,
                    'dokter_id' => $value->dokter->id,
                    'kuota' => $value->kuota,
                    'title' => $value->dokter->nama . "\n" . 'Kuota ' . $value->kuota,
                    'start' => $value->tanggal
                ];
            }
        }

        return $schedule;
    }

    public function store(ScheduleRequest $request) {
        DB::transaction(function () use ($request) {
            $request['dokter_id'] = $request['dokter'];

            if ($this->model::create($request->all())) {
                return $this->model;
            }

            throw new GeneralException('Gagal Menambahkan data');
        });
    }

    public function update($id, ScheduleRequest $request) {
        DB::transaction(function () use ($id, $request) {
            $this->model = $this->model::find($id);
            $this->model->fill($request->all());
            if ($this->model->save()) {
                return $this->model;
            }

            throw new GeneralException('Gagal Memperharui data');
        });
    }

    public function delete($id) {
        DB::transaction(function () use ($id) {
            if ($this->model::find($id)->delete()) {
                return true;
            }

            throw new GeneralException('Gagal menambahkan data');
        });
    }
}
