<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienVaksinForm;
use App\Models\Dokter;
use App\Models\PasienVaksin;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Livewire\Component;

class RegistPasienVaksin extends Component {
    public PasienVaksinForm $form;
    public $dokterList;
    public Collection $scheduleList;
    public $isSuccess;

    public function mount(
        $id,
        DokterRepository $dokterRepository,
        ScheduleRepository $scheduleRepository
    ) {
        // \DB::enableQueryLog();
        $this->dokterList = $dokterRepository->getReadyDokterByTanggal()->toArray();
        //$this->scheduleList = date_interval(date('Y-m-d'), 12);
        $this->scheduleList = $scheduleRepository->getEstimate(12);

        //\Log::info(\DB::getQueryLog());

        if ($id != null && !empty($id)) {
            $pasien = PasienVaksin::where('id', $id)->first();
            if ($pasien != null && !empty($pasien)) {
                $ttl = explode(',', $pasien->tempat_tanggal_lahir_anak);

                $this->form->tempat_lahir = $ttl[0];
                $this->form->tanggal_lahir = $ttl[1];
                $this->form->tempat_tanggal_lahir_anak = $pasien->tempat_tanggal_lahir_anak;
                $this->form->nama_lengkap_anak = $pasien->nama_lengkap_anak;
                $this->form->nik_anak = $pasien->nik_anak;
                $this->form->nama_orang_tua = $pasien->nama_orang_tua;
                $this->form->alamat = $pasien->alamat;
                $this->form->no_hp = $pasien->no_hp;
                $this->form->schedule = $pasien->schedule;
                $this->form->dokter_id = $pasien->dokter_id;
                $this->form->cara_bayar = $pasien->cara_bayar;
                $this->form->vaksin = $pasien->vaksin;
            } else {
                $this->__defaults();
            }
        } else {
            $this->__defaults();
        }

        $this->isSuccess = false;
        //\Log::info(json_encode($this->scheduleList));
    }

    public function store() {
        //$this->validate();
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

        //\Log::warning('json >>> ' . json_encode($this->dokterList));
    }

    public function updatedFormSchedule($value) {
        $this->_dokterBySchedule($value);
    }

    private function _dokterBySchedule($tanggal) {
        $dokterRepository = new DokterRepository(new Dokter());
        $dokterAvail = $dokterRepository
            ->getReadyDokterByTanggal($tanggal)
            ->toArray();

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

        //\Log::warning('json >>> ' . json_encode($this->dokterList));
    }

    private function __defaults() {
        $this->form->vaksin = '';
        $this->form->schedule = '';
        $this->form->dokter_id = '';
        $this->form->cara_bayar = '';
        $this->form->tempat_lahir = '';
        $this->form->tanggal_lahir = '';
        $this->form->tempat_tanggal_lahir_anak = '';
        $this->form->nama_lengkap_anak = '';
        $this->form->nik_anak = '';
        $this->form->nama_orang_tua = '';
        $this->form->alamat = '';
        $this->form->no_hp = '';
    }

    public function render() {
        return view('livewire.regist-pasien-vaksin');
    }
}
