<?php

namespace App\Livewire\Forms;

use App\Helper\StringHelper;
use App\Models\Dokter;
use App\Models\KuotaTransaksi;
use App\Models\PasienVaksin;
use App\Models\Schedule;
use App\Models\ScheduleDokter;
use App\Repository\ScheduleRepository;
use Carbon\Carbon;
use DB;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Throwable;

class PasienVaksinForm extends Form {

    #[Rule('required|min:5', as: 'Tempat Lahir')]
    public $tempat_lahir;

    #[Rule('required|min:5', as: 'Tanggal Lahir')]
    public $tanggal_lahir;
    public $tempat_tanggal_lahir_anak;

    #[Rule('required|min:5', as: 'Nama Lengkap Anak')]
    public $nama_lengkap_anak;

    public $nik_anak;

    public $nama_orang_tua;

    public $alamat;

    public $vaksin;

    #[Rule('required|min:5', as: 'No. Hp')]
    public $no_hp;

    #[Rule('required', as: 'Tanggal Periksa')]
    public $schedule;
    public $dokter_id;

    #[Rule('required', as: 'Cara Bayar')]
    public $cara_bayar;
    private ScheduleRepository $scheduleRepo;


    public function __construct(\Livewire\Component $component, $propertyName) {
        parent::__construct($component, $propertyName);

        $this->scheduleRepo = new ScheduleRepository(
            new Schedule(),
            new Dokter(),
            new KuotaTransaksi()
        );
    }

    public function save(): bool|string {
        //$this->validate();

        DB::beginTransaction();
        try {
            /* \Log::warning('test >>> ' . json_encode([
                'schedule' => $this->schedule,
                'dokter' => $this->dokter_id
            ])); */

            $this->tempat_tanggal_lahir_anak = $this->tempat_lahir . ', ' . $this->tanggal_lahir;
            $this->no_hp = StringHelper::formatNoPonsel($this->no_hp);

            PasienVaksin::create($this->except([
                'tempat_lahir',
                'tanggal_lahir',
            ]));

            $this->scheduleRepo->updateKuota($this->schedule, $this->dokter_id, 'vaksin');

            DB::commit();

            return true;
        } catch (Throwable $e) {
            DB::rollBack();

            \Log::warning('error >>> ' . $e);

            return $e->getMessage();
        }
    }
}
