<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        User::findOrFail(1)->assignRole('super admin');
        User::findOrFail(2)->assignRole('admin');

        Schema::enableForeignKeyConstraints();
    }
}
