<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'first_name' => 'James',
            'last_name' => 'Wagoner',
            'email' => 'jwagoner@deplorablesinvestmentgroup.com',
            'number' => '+13608314766',
            'password' => Hash::make('digging for money'),
        ]);

        $superAdmin->assignRole(['super-admin', 'staff']);

        $rentCollector = User::create([
            'first_name' => 'Kevin',
            'last_name' => 'Novak',
            'email' => 'kevin@deplorablesinvestmentgroup.com',
            'number' => '+13142204633',
            'password' => Hash::make('rent collector!'),
        ]);

        $rentCollector->assignRole(['staff']);
    }
}
