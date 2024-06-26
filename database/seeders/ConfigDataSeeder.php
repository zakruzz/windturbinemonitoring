<?php

namespace Database\Seeders;

use App\Models\ConfigData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConfigData::truncate()->insert([
            'pwm' => 1,
        ]);
    }
}
