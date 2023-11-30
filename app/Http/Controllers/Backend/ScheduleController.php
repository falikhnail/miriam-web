<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller {


    public function __construct(
        protected ScheduleRepository $scheduleRepo,
        protected DokterRepository $dokterRepo
    ) {
    }

    public function index() {
        $schedule = $this->scheduleRepo->getEvents();
        $dokter = $this->dokterRepo->getAll('', 1);

        return view('backend.schedule.index', compact('dokter', 'schedule'));
    }

    public function store(ScheduleRequest $request) {
        //\Log::warning('request', $request->all());
        $this->scheduleRepo->store($request);

        return redirect()->back()->with([
            "success", "Schedule berhasil disimpan"
        ]);
    }

    public function update(ScheduleRequest $request, $id) {
        $this->scheduleRepo->update($id, $request);

        return redirect()->back()->with([
            "success", "Schedule berhasil disimpan"
        ]);
    }

    public function destroy($id) {
        $this->scheduleRepo->delete($id);

        return redirect()->back()->with([
            "success", "Schedule berhasil dihapus"
        ]);
    }
}
