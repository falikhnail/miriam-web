<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienBkiaRequest;
use App\Http\Requests\PasienRequest;
use App\Http\Requests\PasienVaksinRequest;
use App\Models\Pasien;
use App\Models\PasienBkia;
use App\Models\PasienVaksin;
use App\Repository\PasienBkiaRepository;
use App\Repository\PasienRepository;
use App\Repository\PasienVaksinRepository;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class PasienController extends Controller {

    protected $vaksinRepo;
    protected $pasienRepo;
    protected $bkiaRepo;

    public function __construct(
        PasienVaksinRepository $vaksinRepo,
        PasienRepository $pasienRepo,
        PasienBkiaRepository $bkiaRepo
    ) {
        $this->vaksinRepo = $vaksinRepo;
        $this->pasienRepo = $pasienRepo;
        $this->bkiaRepo = $bkiaRepo;
    }

    public function index() {
        return view("frontend.register");
    }

    public function success() {
        return redirect()->back()->with("success", "Formulir berhasil disimpan");
    }

    public function storeFormVaksin(PasienVaksinRequest $request) {
        try {
            $this->vaksinRepo->store($request);

            return redirect()->back()->with("success", "Formulir berhasil disimpan");
        } catch (Throwable $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage(),
                'formulir' => 'vaksin'
            ]);
        }
    }

    public function storeFormBkia(PasienBkiaRequest $request) {
        try {
            $this->bkiaRepo->store($request);

            return redirect()->back()->with('success', 'Pasien berhasil di daftarkan');
        } catch (Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeFormPasien(PasienRequest $request) {
        try {
            $this->pasienRepo->store($request);

            return redirect()->back()->with('success', 'Pasien berhasil di daftarkan');
        } catch (Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
