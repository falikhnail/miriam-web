<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dokter;
use App\Models\Schedule;
use Database\Seeders\Auth\PermissionTableSeeder;
use Database\Seeders\Auth\UserRoleTableSeeder;
use Database\Seeders\Auth\UserTableSeeder;
use Database\Seeders\Backend\ScheduleDokterSeeder;
use Illuminate\Database\Seeder;
use Schema;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        Schema::disableForeignKeyConstraints();

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);

        //PasienVaksin::factory(20)->create();
        Dokter::factory(5)->create();
        Schedule::factory(5)->create();

        //$this->call(ScheduleDokterSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
