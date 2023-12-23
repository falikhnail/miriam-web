<?php

namespace App\Models;


use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole {

    public function setNameAttribute(string $value): void {
        $this->attributes['name'] = strtolower($value);
    }
}
