<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienBkiaRequest;
use App\Models\PasienBkia;
use App\Repository\PasienBkiaRepository;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Throwable;

class RegistBkiaController extends Controller {
    protected $pasienBkiaRepo;

    public function __construct(PasienBkiaRepository $pasienBkiaRepo) {
        $this->pasienBkiaRepo = $pasienBkiaRepo;
    }

    public function index() {

        return view('backend.regist_pasien_bkia.index');
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
        $pasienData = $this->pasienBkiaRepo->getAll(
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
            ->editColumn('no_hp', '{{$no_hp}}')
            ->addColumn('schedule', fn ($data) => date('d/m/Y', strtotime($data->schedule)))
            ->addColumn('created', fn ($data) => date('d/m/Y', strtotime($data->created_at)))
            ->addColumn('action', function (PasienBkia $data) {
                $route = 'backend.pasien.bkia.show';
                return view('backend.components.action_pasien', compact('data', 'route'));
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

    public function show($id) {
        $pasien = $this->pasienBkiaRepo->getById($id);

        return view('backend.regist_pasien_bkia.show', compact(
            'pasien',
        ));
    }

    public function create() {
        return view('backend.regist_pasien_bkia.create');
    }

    public function store(PasienBkiaRequest $request) {
        try {
            $this->pasienBkiaRepo->store($request);

            return redirect()->route('backend.pasien.bkia.index')->with("success", "Pasien berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function edit($id) {
    }

    public function update(PasienBkiaRequest $request, $id) {
        try {
            $this->pasienBkiaRepo->update($id, $request);

            return redirect()->route('backend.pasien.bkia.index')->with("success", "Pasien berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id) {
        try {
            $this->pasienBkiaRepo->delete($id);

            return redirect()->back()->with("success", "Pasien berhasil dihapus");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
