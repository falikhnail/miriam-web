<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pasien extends Model {
    use HasFactory;

    protected $table = 'pasien_umum';

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_tanggal_lahir',
        'agama',
        'no_hp',
        'alamat',
        'pendidikan_terakhir',
        'pekerjaan',
        'status_kawin',
        'no_rm',
        'nik_suami',
        'nama_suami',
        'pekerjaan_suami',
        'no_hp_suami',
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
