<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use App\Repository\DokterRepository;
use Auth;
use DataTables;
use DB;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Throwable;

class DokterController extends Controller {

    protected $dokterRepo;

    public function __construct(DokterRepository $dokterRepo, Request $request) {
        $this->dokterRepo = $dokterRepo;
        /* \Log::info($request->url());
        \Log::info($request->method()); */
    }

    public function index() {
        return view('backend.dokter.index');
    }

    public function indexDT(Request $request) {
        // * filter
        $nama = $request->get('nama');

        $pasienData = $this->dokterRepo->getAll(
            $nama
        );

        $dataTable = DataTables::of($pasienData)
            ->addIndexColumn()
            ->addColumn('nama', '{{$nama}}')
            ->addColumn('status', function (Dokter $data) {
                $status = $data->status == 1 ? "Aktif" : "Non-Aktif";
                $bg = $data->status == 1 ? "bg-emerald-500" : "bg-red-500";
                return '<span class="' . $bg . ' rounded-xl px-2 py-[1px] text-white text-sm">' . $status . '</span>';
            })
            ->addColumn('action', function (Dokter $data) {
                //$deleteRoute = 'backend.dokter.destroy';
                $module = 'dokter';

                return view('backend.components.action_default', compact('data', 'module'));
            })
            ->rawColumns([
                'nama',
                'status',
                'action'
            ]);

        return $dataTable->make(true);
    }

    public function store(DokterRequest $request) {
        $this->dokterRepo->store($request);

        return redirect()->route('backend.dokter.index')->with("success", "Dokter berhasil disimpan");
    }

    public function update(DokterRequest $request, $id) {
        try {
            $this->dokterRepo->update($id, $request);

            return redirect()->back()->with("success", "Dokter berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function destroy($id) {
        try {
            $this->dokterRepo->delete($id);

            return redirect()->back()->with("success", "Dokter berhasil di Hapus");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
}
