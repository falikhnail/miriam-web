<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

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
        'schedule'
    ];
}
