<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repository\PasienBkiaRepository;
use App\Repository\PasienRepository;
use App\Repository\PasienVaksinRepository;
use App\Repository\ScheduleRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __construct(
        public ScheduleRepository $scheduleRepo,
        public PasienVaksinRepository $vaksinRepo,
        public PasienBkiaRepository $bkiaRepo,
        public PasienRepository $pasienRepo
    ) {
    }

    public function index() {
        $schedule = $this->scheduleRepo->getEvents();
        $vaksin = $this->vaksinRepo->getLimited();
        $bkia = $this->bkiaRepo->getLimited();
        $pasien = $this->pasienRepo->getLimited();

        $countVaksin = $this->vaksinRepo->getCount();
        $countBkia = $this->bkiaRepo->getCount();
        $countPasien = $this->pasienRepo->getCount();

        return view('backend.dashboard.index', compact(
            'schedule',
            'vaksin',
            'bkia',
            'pasien',
            'countVaksin',
            'countBkia',
            'countPasien'
        ));
    }
}
