<?php

namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use Artisan;
use Illuminate\Database\Seeder;
use Schema;

class PermissionTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Schema::disableForeignKeyConstraints();

        // Create Roles
        $super_admin = Role::create(['name' => 'super admin']);
        $admin = Role::create(['name' => 'admin']);
        $management = Role::create(['name' => 'management']);

        // Create Permissions
        Permission::firstOrCreate(['name' => 'view_backend']);
        Permission::firstOrCreate(['name' => 'edit_settings']);
        Permission::firstOrCreate(['name' => 'view_logs']);

        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        Artisan::call('auth:permission', [
            'name' => 'pasien',
        ]);
        echo "\n _Pasien_ Permissions Created.";

        Artisan::call('auth:permission', [
            'name' => 'pasien_vaksin',
        ]);
        echo "\n _Pasien_Vaksin_ Permissions Created.";

        Artisan::call('auth:permission', [
            'name' => 'pasien_bkia',
        ]);
        echo "\n _Pasien_BKIA_ Permissions Created.";

        Artisan::call('auth:permission', [
            'name' => 'schedule',
        ]);
        echo "\n _Schedule_ Permissions Created.";

        Artisan::call('auth:permission', [
            'name' => 'dokter',
        ]);
        echo "\n _Dokter_ Permissions Created.";

        echo "\n\n";

        // Assign Permissions to Roles
        $admin->givePermissionTo([
            'view_pasien',
            'add_pasien',
            'edit_pasien',

            'view_pasien_bkia',
            'add_pasien_bkia',
            'edit_pasien_bkia',

            'view_pasien_vaksin',
            'add_pasien_vaksin',
            'edit_pasien_vaksin',
        ]);
        
        $management->givePermissionTo([
            'view_pasien',
            'view_pasien_vaksin',
            'view_pasien_bkia',
            'view_dokter'
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
