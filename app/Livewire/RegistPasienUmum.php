<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienUmumForm;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Livewire\Component;

class RegistPasienUmum extends Component {
    public PasienUmumForm $form;
    public $dokterList;
    public $scheduleList;

    public function mount(
        DokterRepository $dokterRepository,
        ScheduleRepository $scheduleRepository
    ) {
        $this->dokterList = $dokterRepository->getActive();
        //$this->scheduleList = date_interval(date('Y-m-d'), 12);
        $this->scheduleList = $scheduleRepository->getEstimate(12);

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

        \Log::error('error');

        $this->dispatch('swal', [
            'icon' => 'error',
            'title' => 'Error',
            'text' => $save,
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.regist-pasien-umum');
    }
}
