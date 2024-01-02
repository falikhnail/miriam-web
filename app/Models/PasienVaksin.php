<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PasienVaksin extends Model {
    use HasFactory;

    protected $table = 'pasien_vaksin';

    protected $fillable = [
        'nik_anak',
        'nama_lengkap_anak',
        'tempat_tanggal_lahir_anak',
        'nama_orang_tua',
        'no_hp',
        'alamat',
        'vaksin',
        'dokter_id',
        'schedule',
        'cara_bayar'
    ];

    public function schedule(): BelongsTo {
        return $this->belongsTo(Schedule::class);
    }

    public function dokter(): BelongsTo {
        return $this->belongsTo(Dokter::class);
    }
}
