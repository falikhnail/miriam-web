<?php

namespace App\Livewire;

use App\Repository\DokterRepository;
use Livewire\Component;

class AddSchedule extends Component {

    public $dokterList;
    public $tanggal;


    public function mount(
        DokterRepository $dokterRepository
    ) {
        $this->dokterList = $dokterRepository->getActive();
    }

    public function openedModal() {
        \Log::info('open');
    }

    public function closedModal() {
        \Log::info('closed');
    }

    public function updatedTanggal($value) {
        \Log::info('tanggal >>> ' . $value);
    }

    protected $listeners = ['listenerReferenceHere'];

    public function listenerReferenceHere($selectedValue) {

    }

    public function render() {
        return view('livewire.add-schedule');
    }
}
