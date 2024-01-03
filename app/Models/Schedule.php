<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Znck\Eloquent\Traits\BelongsToThrough;

class Schedule extends Model {
    use HasFactory, BelongsToThrough;

    protected $table = 'schedule';

    protected $fillable = [
        'tanggal',
        'kuota',
        'dokter_id',
        //'sid'
    ];

    /* public function dokter(): BelongsToMany {
        return $this->belongsToMany(Dokter::class, $this->table, 'id', 'dokter_id');
    } */

    public function dokter(): BelongsTo {
        return $this->belongsTo(Dokter::class);
    }

    public function kuota_transaksi(): HasMany {
        return $this->hasMany(KuotaTransaksi::class);
    }

    public function scopeByTanggal($query, $tanggal) {
        return $query->where('tanggal', $tanggal)->first();
    }

    public function scopeForUpdateKuota($query, $tanggal, $dokterId) {
        return $query->where('tanggal', $tanggal)->where('dokter_id', $dokterId);
    }
}
