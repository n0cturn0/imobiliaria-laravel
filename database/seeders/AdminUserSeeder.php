<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kamila',
            'email' => 'igdosimoveis@gmail.com',
            'password' => bcrypt('123C@mpoGrande321'),
        ]);
    }
}
