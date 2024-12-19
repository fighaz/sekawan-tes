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
        //
        DB::table('users')->insert(
            [
                [
                    'username' => 'admin',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 10,
                ],
                [
                    'username' => 'pegawai1',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 1,
                ],
                [
                    'username' => 'pegawai2',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 2,
                ],
                [
                    'username' => 'pegawai3',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 3,
                ],
                [
                    'username' => 'supervisor1',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 7,
                ],
                [
                    'username' => 'supervisor2',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 8,
                ],
                [
                    'username' => 'supervisor3',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 9,
                ],
                [
                    'username' => 'driver1',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 4,
                ],
                [
                    'username' => 'driver2',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 5,
                ],
                [
                    'username' => 'driver3',
                    'password' => Hash::make('password'),
                    'pegawai_id' => 6,
                ],
            ]
        );
    }
}
