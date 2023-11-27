<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission {

    public static function defaultPermissions(): array {
        return [
            'view_doctor',
            'add_doctor',
            'edit_doctor',
            'delete_doctor',

            'view_pasien',
            'add_pasien',
            'edit_pasien',
            'delete_pasien',

            'view_schedule',
            'add_schedule',
            'edit_schedule',
            'delete_schedule',

            'view_user',
            'add_user',
            'edit_user',
            'delete_user',
        ];
    }

    public function setNameAttribute(string $value): void {
        $this->attributes['name'] = strtolower($value);
    }
}
