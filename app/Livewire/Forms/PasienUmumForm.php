<?php

namespace App\Livewire\Forms;

use App\Helper\StringHelper;
use App\Models\Dokter;
use App\Models\KuotaTransaksi;
use App\Models\Pasien;
use App\Models\PasienBkia;
use App\Models\PasienVaksin;
use App\Models\Schedule;
use App\Models\ScheduleDokter;
use App\Repository\ScheduleRepository;
use DB;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Throwable;

class PasienUmumForm extends Form
{

    #[Rule('required|min:5', as: 'Tempat Lahir')]
    public $tempat_lahir;
    #[Rule('required|min:5', as: 'Tanggal Lahir')]
    public $tanggal_lahir;
    public $tempat_tanggal_lahir;
    #[Rule('required|min:5', as: 'Nama Lengkap')]
    public $nama_lengkap;
    public $jenis_kelamin;
    public $agama;
    public $pendidikan_terakhir;
    public $pekerjaan;
    public $pekerjaanSuami;
    public $status_kawin;
    public $no_rm;
    public $nik;
    public $nik_suami;
    public $nama_suami;
    public $alamat;
    #[Rule('required|min:5', as: 'No. Hp')]
    public $no_hp;
    public $no_hp_suami;
    #[Rule('required', as: 'Tanggal Periksa')]
    public $schedule_id;
    public $dokter_id;
    #[Rule('required', as: 'Cara Bayar')]
    public $cara_bayar;
    private ScheduleRepository $scheduleRepo;


    public function __construct(\Livewire\Component $component, $propertyName) {
        parent::__construct($component, $propertyName);

        $this->scheduleRepo = new ScheduleRepository(
            new Schedule(),
            new Dokter(),
            new ScheduleDokter(),
            new KuotaTransaksi()
        );
    }

    public function save(): bool|string {
        $this->validate();

        DB::beginTransaction();
        try {
            $this->tempat_tanggal_lahir = $this->tempat_lahir . ', ' . $this->tanggal_lahir;
            $this->no_hp = StringHelper::formatNoPonsel($this->no_hp);

            Pasien::create($this->except([
                'tempat_lahir',
                'tanggal_lahir',
            ]));

            $this->scheduleRepo->updateKuota($this->schedule_id, 'pasien_umum');

            DB::commit();

            return true;
        } catch (Throwable $e) {
            DB::rollBack();

            \Log::warning('error >>> ' . $e);

            return $e->getMessage();
        }
    }

    public function update() {
    }
}
