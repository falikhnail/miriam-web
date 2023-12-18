<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienBkiaForm;
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
        $this->dokterList = $dokterRepository->getActive();
        //$this->scheduleList = date_interval(date('Y-m-d'), 12);
        $this->scheduleList = $scheduleRepository->getEstimate(12);
        //\Log::warning("schedule >> ", (array) $this->scheduleList->toArray());

        $this->isSuccess = false;
        $this->form->schedule_id = '';
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

    public function updatedFormScheduleId($value) {
        $r = new Collection();

        foreach ($this->scheduleList as $schedule) {
            if ($schedule->id == $value) {
                if (count($scheduleDokter = $schedule->schedule_dokter) > 0) {
                    foreach ($scheduleDokter as $sd) {
                        $r->push((object) [
                            'id' => $sd->dokter->id,
                            'nama' => $sd->dokter->nama
                        ]);
                    }
                }
                break;
            }
        }

        if ($r->isEmpty()) {
            $this->dispatch("swal", [
                'icon' => 'warning',
                'title' => 'Info',
                'text' => "Tidak ada Dokter Tersedia Untuk Tanggal yg di Pilih, Silahkan coba tanggal lain",
                //'timer' => 3000,
                'toast' => true,
            ]);

            $this->form->schedule_id = "";
        } else {
            $this->dokterList = $r;
        }
    }

    public function render() {
        return view('livewire.regist-pasien-bkia');
    }
}
