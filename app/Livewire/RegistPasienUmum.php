<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienUmumForm;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Illuminate\Support\Collection;
use Livewire\Component;

class RegistPasienUmum extends Component {
    public PasienUmumForm $form;
    public $dokterList;
    public $scheduleList;

    public function mount(
        $id,
        DokterRepository $dokterRepository,
        ScheduleRepository $scheduleRepository
    ) {
        $this->dokterList = $dokterRepository->getReadyDokterByTanggal()->toArray();
        //$this->scheduleList = date_interval(date('Y-m-d'), 12);
        $this->scheduleList = $scheduleRepository->getEstimate(12);

        if ($id != null && !empty($id)) {
            $pasien = Pasien::where('id', $id)->first();
            if ($pasien != null && !empty($pasien)) {
                $ttl = explode(',', $pasien->tempat_tanggal_lahir);

                $this->form->tempat_lahir = $ttl[0];
                $this->form->tanggal_lahir = $ttl[1];
                $this->form->tempat_tanggal_lahir = $pasien->tempat_tanggal_lahir;
                $this->form->nik = $pasien->nik;
                $this->form->nik_suami = $pasien->nik_suami;
                $this->form->nama_lengkap = $pasien->nama_lengkap;
                $this->form->jenis_kelamin = $pasien->jenis_kelamin;
                $this->form->nama_suami = $pasien->nama_suami;
                $this->form->agama = $pasien->agama;
                $this->form->pendidikan_terakhir = $pasien->pendidikan_terakhir;
                $this->form->pekerjaan = $pasien->pekerjaan;
                $this->form->pekerjaan_suami = $pasien->pekerjaan_suami;
                $this->form->alamat = $pasien->alamat;
                $this->form->no_hp = $pasien->no_hp;
                $this->form->no_hp_suami = $pasien->no_hp_suami;
                $this->form->status_kawin = $pasien->status_kawin;
                $this->form->schedule = $pasien->schedule;
                $this->form->dokter_id = $pasien->dokter_id;
                $this->form->cara_bayar = $pasien->cara_bayar;
                $this->form->no_rm = $pasien->no_rm;
            } else {
                $this->__defaults();
            }
        } else {
            $this->__defaults();
        }

        //\Log::info(json_encode($this->scheduleList));
    }

    public function store() {
        //$this->validate();
        //\Log::info('store umum');
        $save = $this->form->save();
        if ($save === true) {
            return redirect()->route('frontend.form_success');
        }

        $this->dispatch('swal', [
            'icon' => 'error',
            'title' => 'Error',
            'text' => $save,
            'toast' => true,
        ]);
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function updatedFormSchedule($value) {
        $this->_dokterBySchedule($value);
    }

    private function _dokterBySchedule($tanggal) {
        $dokterRepository = new DokterRepository(new Dokter());
        $dokterAvail = $dokterRepository->getReadyDokterByTanggal($tanggal)->toArray();
        //\Log::info('json >>> ' . json_encode($dokterAvail));
        if (count($dokterAvail) == 0) {
            $this->dispatch("swal", [
                'icon' => 'warning',
                'title' => 'Info',
                'text' => "Tidak ada Dokter Tersedia Untuk Tanggal yg di Pilih, Silahkan coba tanggal lain",
                //'timer' => 3000,
                'toast' => true,
            ]);

            $this->form->schedule = "";
            $this->form->dokter_id = "";
            $this->dokterList = [];
        } else {
            $this->form->dokter_id = "";
            $this->dokterList = $dokterAvail;
        }
    }

    private function __defaults() {
        $this->form->tempat_lahir = '';
        $this->form->tanggal_lahir = '';
        $this->form->tempat_tanggal_lahir = '';
        $this->form->nik = '';
        $this->form->nik_suami = '';
        $this->form->nama_lengkap = '';
        $this->form->jenis_kelamin = '';
        $this->form->nama_suami = '';
        $this->form->agama = '';
        $this->form->pendidikan_terakhir = '';
        $this->form->pekerjaan = '';
        $this->form->pekerjaan_suami = '';
        $this->form->alamat = '';
        $this->form->no_hp = '';
        $this->form->no_hp_suami = '';
        $this->form->status_kawin = '';
        $this->form->schedule = '';
        $this->form->dokter_id = '';
        $this->form->cara_bayar = '';
        $this->form->no_rm = '';
    }

    public function render() {
        return view('livewire.regist-pasien-umum');
    }
}
