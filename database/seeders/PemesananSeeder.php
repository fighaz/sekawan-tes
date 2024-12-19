<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemesanans')->insert([
            ['pemesan_id' => 1, 'driver_id' => 4, 'kendaraan_id' => 1, 'lokasi_id' => 1, 'tanggal_pinjam' => '2024-12-18', 'tanggal_kembali' => '2024-12-20', 'status' => 'selesai', 'supervisor_id' => 7],
            ['pemesan_id' => 2, 'driver_id' => 5, 'kendaraan_id' => 2, 'lokasi_id' => 2, 'tanggal_pinjam' => '2024-12-10', 'tanggal_kembali' => '2024-12-21', 'status' => 'selesai', 'supervisor_id' => 7],
            ['pemesan_id' => 3, 'driver_id' => 6, 'kendaraan_id' => 4, 'lokasi_id' => 4, 'tanggal_pinjam' => '2024-11-18', 'tanggal_kembali' => '2024-12-1', 'status' => 'selesai', 'supervisor_id' => 9],
        ]);
    }
}
