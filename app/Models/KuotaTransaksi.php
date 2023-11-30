<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KuotaTransaksi extends Model {
    use HasFactory;

    protected $table = 'kuota_transaksi';

    protected $fillable = [
        'schedule_id',
        'kuota_before',
        'kuota_after',
        'type'
    ];

    public function schedule(): BelongsTo {
        return $this->belongsTo(Schedule::class);
    }
}
