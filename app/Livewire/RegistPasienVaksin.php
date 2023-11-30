<?php

namespace App\Livewire;

use App\Livewire\Forms\PasienVaksinForm;
use App\Models\PasienVaksin;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Livewire\Component;

class RegistPasienVaksin extends Component {

    public PasienVaksinForm $form;
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
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.regist-pasien-vaksin');
    }
}
