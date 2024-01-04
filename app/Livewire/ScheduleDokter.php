<?php

namespace App\Livewire;

use App\Models\Dokter;
use App\Repository\DokterRepository;
use App\Repository\ScheduleRepository;
use Illuminate\Support\Collection;
use Livewire\Component;

class ScheduleDokter extends Component {

    public Collection $scheduleList;
    public array $dokterList;
    public ?string $schedule;
    public ?string $dokterId;

    public function mount(
        ?string $schedule,
        ?string $dokterId,
        DokterRepository $dokterRepository,
        ScheduleRepository $scheduleRepository
    ) {
        $this->dokterList = $dokterRepository->getReadyDokterByTanggal()->toArray();
        $this->scheduleList = $scheduleRepository->getEstimate(12);

        $this->schedule = $schedule;
        $this->dokterId = $dokterId;
    }

    public function updatedSchedule($value) {
        $this->_dokterBySchedule($value);
    }

    public function updatedDokterId($value) {
        if (!empty($value)) {
            foreach ($this->dokterList as $dokter) {
                if ($dokter['id'] == $value) {
                    if ($dokter['kuota'] == 0) {
                        $this->dokterId = '';
                        $this->dispatch("swal", [
                            'icon' => 'warning',
                            'title' => 'Info',
                            'text' => "Kuota untuk Dokter " . $dokter['nama'] . " telah mencapai batas, silahkan pilih dokter lain",
                            //'timer' => 3000,
                            'toast' => true,
                        ]);
                    }
                    break;
                }
            }
        }
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

            $this->schedule = "";
            $this->dokterId = "";
            $this->dokterList = [];
        } else {
            $this->dokterId = "";
            $this->dokterList = $dokterAvail;
        }
    }

    public function render() {
        return view('livewire.schedule-dokter');
    }
}
