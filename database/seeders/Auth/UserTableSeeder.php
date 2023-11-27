<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Schema::disableForeignKeyConstraints();

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => Hash::make('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Admin Istrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($users as $user_data) {
            User::create($user_data);
        }


        Schema::enableForeignKeyConstraints();
    }
}
