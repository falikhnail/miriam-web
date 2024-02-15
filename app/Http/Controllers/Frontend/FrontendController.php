<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller {

    public function index() {
        return view("frontend.index");
    }

    public function visiMisi() {
        return view("frontend.visi_misi");
    }

    public function pelayanan() {
        return view("frontend.pelayanan");
    }

    public function jadwalDokter() {
        return view("frontend.jadwal_dokter");
    }
    public function igd() {
        return view("frontend.igd");
    }
    public function usg() {
        return view("frontend.usg");
    }
    public function rotgen() {
        return view("frontend.rotgen");
    }
    public function lab() {
        return view("frontend.lab");
    }
    public function gizi() {
        return view("frontend.gizi");
    }
    public function ketersediaantempattidur() {
        return view("frontend.ketersediaantempattidur");
    }
    public function pijat_bayi() {
        return view("frontend.pijat_bayi");
    }
    public function cukur_bayi() {
        return view("frontend.cukur_bayi");
    }
}
