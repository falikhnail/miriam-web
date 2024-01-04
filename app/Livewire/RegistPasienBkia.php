<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienBkiaForm;
use App\Models\Dokter;
use App\Models\PasienBkia;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Illuminate\Support\Collection;
use Livewire\Component;

class RegistPasienBkia extends Component {
    public PasienBkiaForm $form;
    public $dokterList;
    public $scheduleList;
    public $isSuccess;

    public function mount(
        $id,
        DokterRepository $dokterRepository,
        ScheduleRepository $scheduleRepository
    ) {
        $this->dokterList = $dokterRepository->getReadyDokterByTanggal()->toArray();
        //$this->scheduleList = date_interval(date('Y-m-d'), 12);
        $this->scheduleList = $scheduleRepository->getEstimate(12);
        //\Log::warning("schedule >> ", (array) $this->scheduleList->toArray());

        if ($id != null && !empty($id)) {
            $pasienBkia = PasienBkia::where('id', $id)->first();
            if ($pasienBkia != null && !empty($pasienBkia)) {
                $ttl = explode(',', $pasienBkia->tempat_tanggal_lahir_anak);

                $this->form->tempat_lahir = $ttl[0];
                $this->form->tanggal_lahir = $ttl[1];
                $this->form->tempat_tanggal_lahir_anak = $pasienBkia->tempat_tanggal_lahir_anak;
                $this->form->nama_lengkap_anak = $pasienBkia->nama_lengkap_anak;
                $this->form->nik_anak = $pasienBkia->nik_anak;
                $this->form->nama_orang_tua = $pasienBkia->nama_orang_tua;
                $this->form->alamat = $pasienBkia->alamat;
                $this->form->no_hp = $pasienBkia->no_hp;
                $this->form->schedule = $pasienBkia->schedule;
                $this->form->dokter_id = $pasienBkia->dokter_id;
                $this->form->cara_bayar = $pasienBkia->cara_bayar;
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
    }

    public function updatedFormSchedule($value) {
        $this->_dokterBySchedule($value);
    }
    private function _dokterBySchedule($tanggal) {
        $dokterRepository = new DokterRepository(new Dokter());
        $dokterAvail = $dokterRepository->getReadyDokterByTanggal($tanggal)->toArray();

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
        return view('livewire.regist-pasien-bkia');
    }
}
