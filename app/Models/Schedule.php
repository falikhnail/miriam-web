<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Znck\Eloquent\Traits\BelongsToThrough;

class Schedule extends Model {
    use HasFactory, BelongsToThrough;

    protected $table = 'schedule';

    protected $fillable = [
        'tanggal',
        'kuota'
    ];

    public function dokter(): BelongsTo {
        return $this->belongsTo(Dokter::class);
    }

    public function schedule_dokter() {
        return $this->hasMany(ScheduleDokter::class);
    }

    public function kuota_transaksi(): HasMany {
        return $this->hasMany(KuotaTransaksi::class);
    }
}
