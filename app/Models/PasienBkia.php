<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienBkia extends Model {
    use HasFactory;

    protected $table = 'pasien_bkia';

    protected $fillable = [
        'nik_anak',
        'nama_lengkap_anak',
        'tempat_tanggal_lahir_anak',
        'nama_orang_tua',
        'no_hp',
        'alamat',
        'schedule'
    ];
}
