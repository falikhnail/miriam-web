<?php

namespace App\Http\Controllers\Api;

use App\Repository\ScheduleRepository;
use Illuminate\Http\Request;

class ScheduleController extends ApiController {

    public function __construct(
        public ScheduleRepository $scheduleRepository,

    ) {
    }

    public function getById(Request $request, $id) {
        $data = $this->scheduleRepository->getById($id);

        return $this->successJson($data);
    }
}
