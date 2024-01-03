<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use App\Models\Pasien;
use App\Repository\DokterRepository;
use App\Repository\PasienRepository;
use App\Repository\ScheduleRepository;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;

class RegistPasienController extends Controller {



    public function __construct(
        public PasienRepository $pasienRepo,
        public DokterRepository $dokterRepo,
        public ScheduleRepository $scheduleRepo
    ) {
    }

    public function index() {
        return view('backend.regist_pasien.index');
    }

    public function indexDT(Request $request) {
        //\Log::warning(json_encode($request->all()));

        // * filter
        $schedule = $request->get('tgl_schedule');
        $regist = $request->get('tgl_registrasi');
        $nama = $request->get('nama');
        $noHp = $request->get('no_hp');
        $alamat = $request->get('alamat');

        //\Log::warning(json_encode([$schedule, $regist, $namaAnak, $noHp, $alamat]));
        $pasienData = $this->pasienRepo->getAll(
            $nama,
            $alamat,
            $noHp,
            $regist,
            $schedule
        );


        $dataTable = DataTables::of($pasienData)
            ->addIndexColumn()
            ->addColumn('nama', '{{$nama_lengkap}}')
            ->addColumn('alamat', '{{$alamat}}')
            ->editColumn('no_hp', fn ($data) => "+$data->no_hp")
            ->addColumn('schedule', fn ($data) => $data->schedule != null ? date('d/m/Y', strtotime($data->schedule)) : '')
            ->addColumn('created', fn ($data) => date('d/m/Y', strtotime($data->created_at)))
            ->addColumn('action', function (Pasien $data) {
                $editRoute = 'backend.pasien.p.edit';
                $viewRoute = 'backend.pasien.p.show';
                $module = 'pasien';

                return view('backend.components.action_pasien', compact(
                    'data',
                    'editRoute',
                    'viewRoute',
                    'module'
                ));
            })
            ->rawColumns([
                'nama',
                'alamat',
                'no_hp',
                'schedule',
                'created',
                'action'
            ]);

        return $dataTable->make(true);
    }

    public function create() {
        $dokterList = $this->dokterRepo->getActive();
        $scheduleList = $this->scheduleRepo->getEstimate(12);

        return view('backend.regist_pasien.show', compact(
            'dokterList',
            'scheduleList'
        ));
    }

    public function show($id) {
        $dokterList = $this->dokterRepo->getActive();
        $scheduleList = $this->scheduleRepo->getEstimate(12);
        $pasien = $this->pasienRepo->getById($id);

        return view('backend.regist_pasien.show', compact(
            'pasien',
            'dokterList',
            'scheduleList'
        ));
    }

    public function store(PasienRequest $request) {
        $this->pasienRepo->store($request);

        return redirect(route('backend.pasien.p.index'))->with("success", "Pasien berhasil disimpan");
    }

    public function edit($id) {
        $dokterList = $this->dokterRepo->getActive();
        $scheduleList = $this->scheduleRepo->getEstimate(12);
        $pasien = $this->pasienRepo->getById($id);

        return view('backend.regist_pasien.show', compact(
            'pasien',
            'dokterList',
            'scheduleList'
        ));
    }

    public function update(PasienRequest $request, $id) {
        $this->pasienRepo->update($id, $request);

        return redirect(route('backend.pasien.p.index'))->with("success", "Pasien berhasil disimpan");
    }

    public function destroy($id) {
        $this->pasienRepo->delete($id);

        return redirect()->back()->with("success", "Pasien berhasil dihapus");
    }
}
