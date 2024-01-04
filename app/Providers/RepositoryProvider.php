<?php

namespace App\Providers;

use App\Models\Dokter;
use App\Models\KuotaTransaksi;
use App\Models\ScheduleDokter;
use Illuminate\Support\ServiceProvider;
use App\Models\Pasien;
use App\Models\PasienBkia;
use App\Models\PasienVaksin;
use App\Models\Schedule;
use App\Repository\DokterRepository;
use App\Repository\PasienBkiaRepository;
use App\Repository\PasienRepository;
use App\Repository\PasienVaksinRepository;
use App\Repository\ScheduleRepository;

class RepositoryProvider extends ServiceProvider {
    /**
     * Register services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        $scheduleRepository = new ScheduleRepository(
            new Schedule(),
            new Dokter(),
            new KuotaTransaksi()
        );

        $this->app->bind(ScheduleRepository::class, function ($app) use ($scheduleRepository) {
            return $scheduleRepository;
        });

        $this->app->bind(PasienVaksinRepository::class, function ($app) use ($scheduleRepository) {
            return new PasienVaksinRepository(new PasienVaksin(), new Schedule(), $scheduleRepository);
        });

        $this->app->bind(PasienRepository::class, function ($app) use ($scheduleRepository) {
            return new PasienRepository(new Pasien(), $scheduleRepository);
        });

        $this->app->bind(PasienBkiaRepository::class, function ($app) use ($scheduleRepository) {
            return new PasienBkiaRepository(new PasienBkia(), $scheduleRepository);
        });

        $this->app->bind(DokterRepository::class, function ($app) {
            return new DokterRepository(new Dokter());
        });
    }
}
