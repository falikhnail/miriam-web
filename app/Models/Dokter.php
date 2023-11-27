<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model {
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'nama',
        'status'
    ];

    public function  schedules(): HasMany {
        return $this->hasMany(Schedule::class, 'dokter_id', 'id');
    }
}
