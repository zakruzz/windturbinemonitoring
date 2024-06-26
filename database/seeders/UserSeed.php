<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate()->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'Password' => Hash::make('admin12345'),
        ]);
    }
}
