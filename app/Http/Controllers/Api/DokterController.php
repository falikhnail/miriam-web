<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository\DokterRepository;
use Illuminate\Http\Request;

class DokterController extends ApiController {

    public function __construct(
        public DokterRepository $dokterRepository
    ) {
    }

    public function getAvailDokterByTanggal(Request $request, $tanggal) {
        $data = $this->dokterRepository->getStandByDokterByScheduleTanggal($tanggal)->toArray();
        if ($request->scheduleId != null && !empty($request->scheduleId)) {
            $dokterByScheduleId = $this->dokterRepository->getAvailDokterByScheduleId($request->scheduleId)->toArray();
            $data = array_merge($data, $dokterByScheduleId);
        }

        return $this->successJson($data);
    }
}
