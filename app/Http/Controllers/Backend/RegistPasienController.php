<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use App\Models\Pasien;
use App\Repository\PasienRepository;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Livewire\Exceptions\MethodNotFoundException;
use Throwable;

class RegistPasienController extends Controller {

    protected $pasienRepo;

    public function __construct(PasienRepository $pasienRepo) {
        $this->pasienRepo = $pasienRepo;
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
            ->editColumn('no_hp', '{{$no_hp}}')
            ->addColumn('schedule', fn ($data) => date('d/m/Y', strtotime($data->schedule)))
            ->addColumn('created', fn ($data) => date('d/m/Y', strtotime($data->created_at)))
            ->addColumn('action', function (Pasien $data) {
                $route = 'backend.pasien.p.show';
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

    public function create() {
        return view('backend.regist_pasien.create');
    }

    public function show($id) {
        $pasien = $this->pasienRepo->getById($id);

        return view('backend.regist_pasien.show', compact(
            'pasien',
        ));
    }

    public function store(PasienRequest $request) {
        try {
            $this->pasienRepo->store($request);

            return redirect(route('backend.pasien.p.index'))->with("success", "Pasien berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->route('backend.pasien.p.index')->with([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function edit($id) {
    }

    public function update(PasienRequest $request, $id) {
        try {
            $this->pasienRepo->update($id, $request);

            return redirect(route('backend.pasien.p.index'))->with("success", "Pasien berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->route('backend.pasien.p.index')->with([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id) {
        try {
            $this->pasienRepo->delete($id);

            return redirect()->back()->with("success", "Pasien berhasil dihapus");
        } catch (Throwable $e) {
            return redirect()->route('backend.pasien.p.index')->with([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
