<?php

namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use Artisan;
use Illuminate\Database\Seeder;
use Schema;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // Create Roles
        $super_admin = Role::create(['name' => 'super admin']);
        $admin = Role::create(['name' => 'admin']);

        // Create Permissions
        Permission::firstOrCreate(['name' => 'view_backend']);
        Permission::firstOrCreate(['name' => 'edit_settings']);
        Permission::firstOrCreate(['name' => 'view_logs']);

        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        Artisan::call('auth:permission', [
            'name' => 'posts',
        ]);
        echo "\n _Posts_ Permissions Created.";

        echo "\n\n";

        // Assign Permissions to Roles
        $admin->givePermissionTo(Permission::all());

        Schema::enableForeignKeyConstraints();
    }
}
