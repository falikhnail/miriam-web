<?php

namespace App\Repository;

use App\Exceptions\GeneralException;
use App\Http\Requests\ScheduleRequest;
use App\Models\Dokter;
use App\Models\KuotaTransaksi;
use App\Models\Schedule;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Throwable;

class ScheduleRepository {

    public function __construct(
        public Schedule $model,
        public Dokter $dokter,
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
        $schedule = $this->model::with('dokter');

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

    public function getById($id) {
        return $this->model::find($id);
    }

    /**
     * Summary of getEvents
     * @param string $tanggal
     * @return array
     * if tanggal was filled, there just want specific
     */
    public function getEvents(string $tanggal = ''): array {
        DB::enableQueryLog();

        $schedule = [];
        $scheduleData = $this->getAll($tanggal)
            ->get();
        /* ->groupBy(['tanggal'])
            ->all(); */

        /* $scheduleData = $this->model
            ->selectRaw('id, tanggal, sum(kuota) kuota')
            ->when(!empty($tanggal), fn ($q) => $q->where('tanggal', $tanggal))
            ->groupByRaw('tanggal, kuota')
            ->get(); */

        //\Log::info(DB::getQueryLog());
        //\Log::info(json_encode($scheduleData));

        if (!empty($scheduleData)) {
            foreach ($scheduleData as $value) {
                $events = [
                    'id' => $value->id,
                    'kuota' => $value->kuota,
                    'title' => 'Kuota ' . $value->kuota,
                    'start' => $value->tanggal,
                    'schedule_id' => $value->id,
                    'dokter' => $value->dokter->nama,
                    'dokter_id' => $value->dokter->id,
                    'overlap' => false
                ];

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

        //\Log::info(DB::getQueryLog());
        //\Log::warning('get <<< ' . json_encode($schedule));
        return $schedule;
    }

    public function getByTanggal(string $tanggal) {
        return $this->getAll($tanggal)->first();
    }

    public function getEstimate(int $estimate) {
        return $this->getAll('', $estimate)
            ->selectRaw("id, tanggal, sum(kuota) as kuota")
            ->groupByRaw("tanggal")
            ->orderBy('tanggal', 'asc')
            ->get();
    }

    public function store(ScheduleRequest $request) {
        try {
            DB::transaction(function () use ($request) {
                /* $scheduleDokterData = [];
                foreach ($request->dokter as $dokter) {
                    $scheduleDokterData[] = [
                        'sid' => $request->sid,
                        'dokter_id' => $dokter,
                        'tanggal' => $request->tanggal,
                        'kuota' => $request->kuota,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }

                $this->model::insert($scheduleDokterData); */

                $this->model::insert([
                    //'sid' => $request->sid,
                    'dokter_id' => $request->dokter,
                    'tanggal' => $request->tanggal,
                    'kuota' => $request->kuota,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            });
        } catch (Throwable $e) {
            \Log::warning($e);

            throw new GeneralException('Gagal Menambahkan data');
        }
    }

    public function update($id, ScheduleRequest $request) {
        try {
            DB::transaction(function () use ($id, $request) {
                /* $scheduleDokterData = [];
                foreach ($request->dokter as $dokter) {
                    $scheduleDokterData[] = [
                        //'sid' => $request->sid,
                        'dokter_id' => $dokter,
                        'tanggal' => $tanggal,
                        'kuota' => $request->kuota,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }

                $this->model->insert($scheduleDokterData); */

                $this->model = $this->model::lockForUpdate()->find($id);
                $this->model->dokter_id = $request->dokter;
                $this->model->kuota = $request->kuota;
                $this->model->save();
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
    public function updateKuota(string $tanggal, string $dokter, $type) {
        $this->model = $this->model::lockForUpdate()
            ->forUpdateKuota($tanggal, $dokter)
            ->first();

        if ($this->model->kuota > 0 && $this->model->kuota >= 1) {
            $lastKuota = $this->model->kuota;
            $this->model->kuota = $this->model->kuota - 1;
            $this->model->save();

            $this->kuotaTransaksi::create([
                'schedule' => $this->model->tanggal,
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
            if ($this->model::lockForUpdate()->find($id)->delete()) {
                return true;
            }

            throw new GeneralException('Gagal menghapus data');
        });
    }
}
