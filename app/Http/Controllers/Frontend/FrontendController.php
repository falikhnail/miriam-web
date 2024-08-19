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
    public function sejarah() {
        return view("frontend.sejarah");
    }
    public function struktur_organisasi() {
        return view("frontend.struktur_organisasi");
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

    public function dr_yudi() {
        return view("frontend.dr_yudi");
    }
    public function dr_ferry() {
        return view("frontend.dr_ferry");
    }
    
    public function dr_tezza() {
        return view("frontend.dr_tezza");
    }
    public function dr_umi() {
        return view("frontend.dr_umi");
    }
    public function dr_michel() {
        return view("frontend.dr_michel");
    }
    public function drg_vera() {
        return view("frontend.drg_vera");
    }
    public function drg_cindy() {
        return view("frontend.drg_cindy");
    }

    public function indikatormutu() {
        return view("frontend.indikatormutu");
    }
    public function mitra() {
        return view("frontend.mitra");
    }
    public function alur_ugd() {
        return view("frontend.alur_ugd");
    }
    public function alur_ranap() {
        return view("frontend.alur_ranap");
    }
    public function alur_lab() {
        return view("frontend.alur_lab");
    }
    public function alur_perinatologi() {
        return view("frontend.alur_perinatologi");
    }
    public function alur_ponek() {
        return view("frontend.alur_ponek");
    }
    public function alur_kambay() {
        return view("frontend.alur_kambay");
    }
    public function alur_vk() {
        return view("frontend.alur_vk");
    }
    public function alur_rajal() {
        return view("frontend.alur_rajal");
    }
}
