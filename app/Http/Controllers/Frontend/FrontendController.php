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
    public function tindik_bayi() {
        return view("frontend.tindik_bayi");
    }
    public function imun_dasar() {
        return view("frontend.imun_dasar");
    }
    public function imun_tambahan() {
        return view("frontend.imun_tambahan");
    }
    public function imun_tambahan1() {
        return view("frontend.imun_tambahan1");
    }
    public function vaksin_dewasa() {
        return view("frontend.vaksin_dewasa");
    }
    public function hak_kewajiban() {
        return view("frontend.hak_kewajiban");
    }

    public function bidan() {
        return view("frontend.bidan");
    }
    public function perawat() {
        return view("frontend.perawat");
    }
    public function marketing() {
        return view("frontend.marketing");
    }
    public function adminpendaftaran() {
        return view("frontend.adminpendaftaran");
    }
    public function ttk() {
        return view("frontend.ttk");
    }
    public function analiskesehatan() {
        return view("frontend.analiskesehatan");
    }
    public function indikatormutu() {
        return view("frontend.indikatormutu");
    }
}
