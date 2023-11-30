<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienVaksinRequest;
use App\Models\PasienVaksin;
use App\Repository\DokterRepository;
use App\Repository\PasienVaksinRepository;
use App\Repository\ScheduleRepository;
use DB;
use Illuminate\Http\Request;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class RegistVaksinController extends Controller {



    public function __construct(
        public PasienVaksinRepository $vaksinRepo,
        public DokterRepository $dokterRepo,
        public ScheduleRepository $scheduleRepo
    ) {
    }

    public function index() {

        return view('backend.regist_vaksin.index');
    }


    public function indexDT(Request $request) {
        //\Log::warning(json_encode($request->all()));

        // * filter
        $schedule = $request->get('tgl_schedule');
        $regist = $request->get('tgl_registrasi');
        $namaAnak = $request->get('nama_anak');
        $noHp = $request->get('no_hp');
        $alamat = $request->get('alamat');

        //\Log::warning(json_encode([$schedule, $regist, $namaAnak, $noHp, $alamat]));
        $pasienData = $this->vaksinRepo->getAll(
            $namaAnak,
            $alamat,
            $noHp,
            $regist,
            $schedule
        );


        $dataTable = DataTables::of($pasienData)
            ->addIndexColumn()
            ->addColumn('nama', '{{$nama_lengkap_anak}}')
            ->addColumn('alamat', '{{$alamat}}')
            ->addColumn('vaksin', '{{$vaksin}}')
            ->editColumn('no_hp', '{{$no_hp}}')
            ->addColumn('schedule', fn ($data) => date('d/m/Y', strtotime($data->schedule)))
            ->addColumn('created', fn ($data) => date('d/m/Y', strtotime($data->created_at)))
            ->addColumn('action', function (PasienVaksin $data) {
                $editRoute = 'backend.pasien.vaksin.edit';
                $viewRoute = 'backend.pasien.vaksin.show';
                $module = 'pasien_vaksin';

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
                'vaksin',
                'no_hp',
                'schedule',
                'created',
                'action'
            ]);

        return $dataTable->make(true);
    }

    public function show($id) {
        $dokterList = $this->dokterRepo->getActive();
        $scheduleList = $this->scheduleRepo->getEstimate(12);
        $pasien = $this->vaksinRepo->getById($id);

        return view('backend.regist_vaksin.show', compact(
            'pasien',
            'dokterList',
            'scheduleList'
        ));
    }

    public function create() {
        $dokterList = $this->dokterRepo->getActive();
        $scheduleList = $this->scheduleRepo->getEstimate(12);

        return view('backend.regist_vaksin.show', compact(
            'dokterList',
            'scheduleList'
        ));
    }

    public function store(PasienVaksinRequest $request) {
        try {
            $this->vaksinRepo->store($request);

            return redirect(route('backend.pasien.vaksin.index'))->with("success", "Pasien berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function edit($id) {
        $dokterList = $this->dokterRepo->getActive();
        $scheduleList = $this->scheduleRepo->getEstimate(12);
        $pasien = $this->vaksinRepo->getById($id);

        return view('backend.regist_vaksin.show', compact(
            'pasien',
            'dokterList',
            'scheduleList'
        ));
    }

    public function update(PasienVaksinRequest $request, $id) {
        try {
            $this->vaksinRepo->update($id, $request);

            return redirect(route('backend.pasien.vaksin.index'))->with("success", "Pasien berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function destroy($id) {
        try {
            $this->vaksinRepo->delete($id);

            return redirect(route('backend.pasien.vaksin.index'))->with("success", "Pasien berhasil dihapus");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
}
