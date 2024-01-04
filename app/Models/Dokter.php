<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model {
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'nama',
        'status'
    ];



    public function  schedule(): BelongsTo {
        return $this->belongsTo(Schedule::class);
    }

    public function scopeLeftJoinSchedule($query, $tanggal = '') {
        return $query
            ->leftJoin('schedule', 'schedule.dokter_id', '=', 'dokter.id')
            ->when(!empty($tanggal), fn ($q) => $q->where('schedule.tanggal', $tanggal))
            ->select('dokter.*', 'schedule.id as schedule_id', 'schedule.kuota', 'schedule.tanggal')
            ->groupBy('dokter.id');
    }

    public function scopeNotInSchedule($query, $tanggal): Builder {
        return $query->whereRaw("id not in (select dokter_id from schedule where tanggal = '$tanggal')");
    }

    public function scopeInSchedule($query, $tanggal): Builder {
        return $query->whereRaw("id in (select dokter_id from schedule where tanggal = '$tanggal')");
    }

    public function scopeInScheduleByScheduleId($query, $id): Builder {
        return $query->whereRaw("id in (select dokter_id from schedule where id = '$id')");
    }
}
