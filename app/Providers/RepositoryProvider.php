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
        $this->app->bind(PasienVaksinRepository::class, function ($app) {
            return new PasienVaksinRepository(new PasienVaksin(), new Schedule());
        });

        $this->app->bind(PasienRepository::class, function ($app) {
            return new PasienRepository(new Pasien());
        });

        $this->app->bind(PasienBkiaRepository::class, function ($app) {
            return new PasienBkiaRepository(new PasienBkia());
        });

        $this->app->bind(DokterRepository::class, function ($app) {
            return new DokterRepository(new Dokter());
        });

        $this->app->bind(ScheduleRepository::class, function ($app) {
            return new ScheduleRepository(
                new Schedule(),
                new Dokter(),
                new KuotaTransaksi()
            );
        });
    }
}
