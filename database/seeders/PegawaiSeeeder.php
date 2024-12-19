<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pegawais')->insert([
            ['nama' => 'Pegawai 1', 'notelp' => '0812345671', 'alamat' => 'Alamat Pegawai 1', 'jabatan' => 'pegawai'],
            ['nama' => 'Pegawai 2', 'notelp' => '0812345672', 'alamat' => 'Alamat Pegawai 2', 'jabatan' => 'pegawai'],
            ['nama' => 'Pegawai 3', 'notelp' => '0812345673', 'alamat' => 'Alamat Pegawai 3', 'jabatan' => 'pegawai'],
            ['nama' => 'Driver 1', 'notelp' => '0812345674', 'alamat' => 'Alamat Driver 1', 'jabatan' => 'driver'],
            ['nama' => 'Driver 2', 'notelp' => '0812345675', 'alamat' => 'Alamat Driver 2', 'jabatan' => 'driver'],
            ['nama' => 'Driver 3', 'notelp' => '0812345676', 'alamat' => 'Alamat Driver 3', 'jabatan' => 'driver'],
            ['nama' => 'Supervisor 1', 'notelp' => '0812345677', 'alamat' => 'Alamat Supervisor 1', 'jabatan' => 'supervisor'],
            ['nama' => 'Supervisor 2', 'notelp' => '0812345678', 'alamat' => 'Alamat Supervisor 2', 'jabatan' => 'supervisor'],
            ['nama' => 'Supervisor 3', 'notelp' => '0812345679', 'alamat' => 'Alamat Supervisor 3', 'jabatan' => 'supervisor'],
            ['nama' => 'Admin 1', 'notelp' => '0812345680', 'alamat' => 'Alamat Admin 1', 'jabatan' => 'admin'],
        ]);
    }
}
