<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\PasienBkia;
use App\Models\PasienVaksin;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class PasienController extends Controller {
    public function index() {
        return view("frontend.register");
    }

    public function storeFormVaksin(Request $request) {
        $v = $this->_common_validation($request);
        \Log::warning(json_encode($v));

        DB::beginTransaction();

        try {
            $pasienVaksin = new PasienVaksin();
            $pasienVaksin->nik_anak = $request->post('nik-anak');
            $pasienVaksin->nama_lengkap_anak = $request->post('nama-lengkap-anak');
            $pasienVaksin->tempat_tanggal_lahir_anak = $request->post('tempat-lahir') . ', ' . $request->post('tanggal-lahir');
            $pasienVaksin->nama_orang_tua = $request->post('nama-orang-tua');
            $pasienVaksin->no_hp = $request->post('no-hp');
            $pasienVaksin->alamat = $request->post('alamat');
            $pasienVaksin->vaksin = $request->post('vaksin');
            $pasienVaksin->schedule = $request->post('schedule');

            $pasienVaksin->save();
            DB::commit();

            return redirect()->back()->with("success", "Formulir berhasil disimpan");
        } catch (Throwable $e) {
            DB::rollBack();

            \Log::error($e->getMessage());

            return redirect()->back()->with([
                'error' => $e->getMessage(),
                'formulir' => 'vaksin'
            ]);
        }
    }

    public function storeFormBkia(Request $request) {
        $this->_common_validation($request);

        try {
            $pasienBkia = new PasienBkia();
            $pasienBkia->nik_anak = $request->post('nik-anak');
            $pasienBkia->nama_lengkap_anak = $request->post('nama-lengkap-anak');
            $pasienBkia->tempat_tanggal_lahir_anak = $request->post('tempat-lahir') . ', ' . $request->post('tanggal-lahir');
            $pasienBkia->nama_orang_tua = $request->post('nama-orang-tua');
            $pasienBkia->no_hp = $request->post('no-hp');
            $pasienBkia->alamat = $request->post('alamat');
            $pasienBkia->schedule = $request->post('schedule');

            $pasienBkia->save();
            return redirect()->back()->with('info', 'Pasien berhasil di daftarkan');
        } catch (Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeFormPasien(Request $request) {
        $this->validate($request, $this->validationMessages, [
            'nama-lengkap' => ['required'],
            'alamat' => ['required'],
            'tempat-lahir' => ['required'],
            'tanggal-lahir' => ['required'],
            'no-hp' => ['required'],
        ]);

        try {
            $pasien = new Pasien();
            $pasien->nik = $request->post('nik');
            $pasien->nama_lengkap = $request->post('nama-lengkap');
            $pasien->tempat_tanggal_lahir = $request->post('tempat-lahir') . ', ' . $request->post('tanggal-lahir');
            $pasien->agama = $request->post('agama');
            $pasien->no_hp = $request->post('no-hp');
            $pasien->alamat = $request->post('alamat');
            $pasien->pendidikan_terakhir = $request->post('pendidikan');
            $pasien->pekerjaan = $request->post('pekerjaan');
            $pasien->status_kawin = $request->post('status-kawin');
            $pasien->no_rm = $request->post('no-rm');
            $pasien->nik_suami = $request->post('nik-suami');
            $pasien->nama_suami = $request->post('nama-suami');
            $pasien->pekerjaan_suami = $request->post('pekerjaan-suami');
            $pasien->no_hp_suami = $request->post('no-hp-suami');
            $pasien->schedule = $request->post('schedule-vaksin');
            $pasien->save();

            return redirect()->back()->with('success', 'Pasien berhasil di daftarkan');
        } catch (Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    private function _common_validation(Request $request) {
        return $this->validate($request, $this->validationMessages, [
            'nama-lengkap-anak' => ['required'],
            'alamat' => ['required'],
            'tempat-lahir' => ['required'],
            'tanggal-lahir' => ['required'],
            'no-hp' => ['required'],
        ]);
    }
}
