<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model {
    use HasFactory;

    protected $table = 'schedule';

    protected $fillable = [
        'dokter_id',
        'tanggal',
        'kuota'
    ];

    public function dokter(): BelongsTo {
        return $this->belongsTo(Dokter::class);
    }
}
