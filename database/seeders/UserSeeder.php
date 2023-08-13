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
            'first_name' => 'Maneth',
            'last_name' => 'Pathirana',
            'mobile' => '1234567890',
            'email' => 'johndoe@example.com',
            'Address_1' => '123 Main St',
            'Address_2' => 'Apt 4B',
            'city' => 'New York',
            'zip' => '10001',
            'driving_license' => 'ABC123',
            'driving_license_expire_year' => '2025',
            'driving_license_expire_month' => '12',
            'driving_license_expire_date' => '31',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
