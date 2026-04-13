<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'LP3I TASIKMALAYA',
            'email' => 'lp3i@gmail.com',
            'password' => bcrypt('lp3itasikmalaya'),
            'role' => 'admin'
        ]);
    }
}
