<?php

namespace App\Repository;

use App\Exceptions\GeneralException;
use App\Http\Requests\ScheduleRequest;
use App\Models\Dokter;
use App\Models\KuotaTransaksi;
use App\Models\Schedule;
use App\Models\ScheduleDokter;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Throwable;

class ScheduleRepository {


    public function __construct(
        public Schedule $model,
        public Dokter $dokter,
        public ScheduleDokter $scheduleDokter,
        public KuotaTransaksi $kuotaTransaksi
    ) {
    }

    /**
     * Summary of getAll
     * @param string $tanggal
     * @param int $estimatedDate
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getAll(string $tanggal = '', int $estimatedDate = 0): Builder {
        $schedule = $this->model::with([
            'schedule_dokter' => function ($q) {
                $q->with('dokter:id,nama')
                    ->select('id', 'dokter_id', 'schedule_id');
            }
        ]);

        if ($estimatedDate != null && $estimatedDate > 0) {
            $schedule->whereRaw("tanggal between current_date and date_add(current_date, interval $estimatedDate day)");
        } else if (!empty($tanggal) && strlen($tanggal) > 0) {
            $schedule->where('tanggal', $tanggal);
        } else {
            $schedule->whereRaw("tanggal >= current_date");
        }

        //\Log::warning('get <<< ' . $schedule->toSql());
        return $schedule;
    }

    /**
     * Summary of getEvents
     * @param mixed $tanggal
     * @return array
     * if tanggal was filled, there just want specific
     */
    public function getEvents($tanggal = '') {
        $schedule = [];
        if (empty($tanggal)) {
            $scheduleData = $this->getAll($tanggal)->get();
        } else {
            $scheduleData = $this->getAll($tanggal)->first();
        }

        if (!empty($tanggal)) {
            if (empty($scheduleData)) {
                return [];
            }

            return [
                'id' => $scheduleData->id,
                'kuota' => $scheduleData->kuota,
                'tanggal' => $scheduleData->tanggal,
            ];
        }
        //\Log::warning('get <<< ' . json_encode($scheduleData));

        if (!$scheduleData->isEmpty()) {
            foreach ($scheduleData as $value) {
                $events = [
                    'id' => $value->id,
                    'kuota' => $value->kuota,
                    'title' => 'Kuota ' . $value->kuota,
                    'start' => $value->tanggal,
                    'schedule_id' => $value->id,
                    'dokter' => [],
                    'dokter_id' => [],
                    'overlap' => false
                ];

                if (count($value->schedule_dokter) > 0) {
                    foreach ($value->schedule_dokter as $schedule_dokter) {
                        $events['dokter'][] = $schedule_dokter->dokter->nama;
                        $events['dokter_id'][] = $schedule_dokter->dokter->id;
                    }
                }

                $schedule[] = $events;
            }
        } else {
            $schedule = [
                'id' => null,
                'kuota' => null,
                'title' => null,
                'start' => null,
                'schedule_id' => null,
                'dokter' => [],
                'dokter_id' => [],
                'overlap' => false
            ];
        }

        //\Log::warning('get <<< ' . json_encode($schedule));
        return $schedule;
    }

    public function getByTanggal(string $tanggal) {
        return $this->getAll($tanggal)->first();
    }

    public function getEstimate(int $estimate) {
        return $this->getAll('', $estimate)->get();
    }

    public function store(ScheduleRequest $request) {
        try {
            DB::transaction(function () use ($request) {
                $this->model::insert([
                    'tanggal' => $request->tanggal,
                    'kuota' => $request->kuota,
                ]);

                $scheduleId = DB::getPdo()->lastInsertId();

                $scheduleDokterData = [];
                foreach ($request->dokter as $dokter) {
                    $scheduleDokterData[] = [
                        'dokter_id' => $dokter,
                        'schedule_id' => $scheduleId,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }

                $this->scheduleDokter::insert($scheduleDokterData);
            });
        } catch (Throwable $e) {
            throw new GeneralException('Gagal Menambahkan data');
        }
    }

    public function update($id, ScheduleRequest $request) {
        try {
            DB::transaction(function () use ($id, $request) {
                $this->model = $this->model::find($id);
                $this->model->kuota = $request->kuota;
                $this->model->save();

                $this->scheduleDokter->where('schedule_id', $id)->delete();

                $scheduleDokterData = [];
                foreach ($request->dokter as $dokter) {
                    $scheduleDokterData[] = [
                        'dokter_id' => $dokter,
                        'schedule_id' => $id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }

                $this->scheduleDokter::insert($scheduleDokterData);
            });
        } catch (Throwable $e) {
            throw new GeneralException('Gagal Memperharui data');
        }
    }

    /**
     * Summary of updateKuota
     * @param mixed $id
     * @throws \App\Exceptions\GeneralException
     * @return bool
     * @throws GeneralException
     */
    public function updateKuota($id, $type) {
        $this->model = $this->model::find($id);
        if ($this->model->kuota > 0 && $this->model->kuota > 1) {
            $lastKuota = $this->model->kuota;
            $this->model->kuota = $this->model->kuota - 1;
            $this->model->save();

            $this->kuotaTransaksi::create([
                'schedule_id' => $this->model->id,
                'kuota_before' => $lastKuota,
                'kuota_after' => $this->model->kuota,
                'type' => $type
            ]);

            return true;
        }

        throw new GeneralException('Kuota Tanggal ' . $this->model->tanggal . ' Telah mencapai batas');
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
