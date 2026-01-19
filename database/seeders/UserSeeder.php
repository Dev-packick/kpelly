<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nom' => 'LOGAN',
                'prenom' => 'Marcus',
                'email' => '228devlab@gmail.com',
                'telephone' => '22893014078',
                'password' => '$2y$10$IUi4u9zVuDl9swU1xNBByOfuUXv7hrXlAZWVyke1DTZPNLsGP1E1W',
                'role' => 'ADMIN',
            ],
            [
                'nom' => 'ALI',
                'prenom' => 'Patrick',
                'email' => 'alipatrick7@gmail.com',
                'telephone' => '22890612190',
                'password' => Hash::make('Alipatrick7'),
                'role' => 'ADMIN',
            ],
            [
                'nom' => 'KPELLY',
                'prenom' => 'INDUSTRIES',
                'email' => 'contact@kpellyindustries.com',
                'telephone' => null,
                'password' => Hash::make('Kpelly@2025'),
                'role' => 'ADMIN',
            ],
        ]);
    }
}