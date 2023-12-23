<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission {

    public static function defaultPermissions(): array {
        return [
            'view_pasien',
            'add_pasien',
            'edit_pasien',
            'delete_pasien',

            'view_pasien_bkia',
            'add_pasien_bkia',
            'edit_pasien_bkia',
            'delete_pasien_bkia',

            'view_pasien_vaksin',
            'add_pasien_vaksin',
            'edit_pasien_vaksin',
            'delete_pasien_vaksin',

            'view_dokter',
            'add_dokter',
            'edit_dokter',
            'delete_dokter',

            'view_schedule',
            'add_schedule',
            'edit_schedule',
            'delete_schedule',
        ];
    }

    public static function management(): array {
        return [
            'view_pasien',
            'view_pasien_vaksin',
            'view_pasien_bkia',
            'view_dokter'
        ];
    }

    public static function admin(): array {
        return [
            'view_pasien',
            'add_pasien',
            'edit_pasien',

            'view_pasien_bkia',
            'add_pasien_bkia',
            'edit_pasien_bkia',

            'view_pasien_vaksin',
            'add_pasien_vaksin',
            'edit_pasien_vaksin',
        ];
    }

    public function setNameAttribute(string $value): void {
        $this->attributes['name'] = strtolower($value);
    }
}
