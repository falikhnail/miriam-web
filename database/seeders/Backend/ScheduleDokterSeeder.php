<?php

namespace Database\Seeders\Backend;

use App\Models\Dokter;
use App\Models\ScheduleDokter;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;

class ScheduleDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $data = [
            [
                'dokter_id' => 1,
                'schedule' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dokter_id' => 2,
                'schedule' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dokter_id' => 3,
                'schedule' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dokter_id' => 4,
                'schedule' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        ScheduleDokter::insert($data);

        Schema::enableForeignKeyConstraints();
    }
}
