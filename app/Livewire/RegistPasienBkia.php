<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienBkiaForm;
use App\Models\Dokter;
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
        DokterRepository $dokterRepository,
        ScheduleRepository $scheduleRepository
    ) {
        $this->dokterList = $dokterRepository->getReadyDokterByTanggal()->toArray();
        //$this->scheduleList = date_interval(date('Y-m-d'), 12);
        $this->scheduleList = $scheduleRepository->getEstimate(12);
        //\Log::warning("schedule >> ", (array) $this->scheduleList->toArray());

        $this->isSuccess = false;
        $this->form->schedule = '';
        $this->form->dokter_id = '';
        $this->form->cara_bayar = '';

        //\Log::info(json_encode($this->scheduleList));
    }

    public function store() {
        $this->validate();

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

    public function render() {
        return view('livewire.regist-pasien-bkia');
    }
}
