<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'John Smith',
            'comments' => 'Director',
            'password' => bcrypt('password'),
        ],
        [
            'name' => 'ibrahimMH',
            'comments' => 'Programming',
            'password' => bcrypt('password'),
        ]);
    }
}
