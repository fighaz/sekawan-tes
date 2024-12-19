<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kendaraans')->insert([
            [
                'nama' => 'Dump Truck',
                'noplat' => 'DK 02487',
                'jenis_kendaraan' => 'barang',
                'status_servis' => False,
                'jadwal_servis' => '2023-12-12',
                'pemakaian_bbm' => 5,
                'status_milik' => 'perusahaan',
                'tanggal_masuk' => '2022-08-09',
            ],
            [
                'nama' => 'Truck',
                'noplat' => 'DK 12247',
                'jenis_kendaraan' => 'barang',
                'status_servis' => False,
                'jadwal_servis' => '2023-12-12',
                'pemakaian_bbm' => 5,
                'status_milik' => 'perusahaan',
                'tanggal_masuk' => '2022-08-09',
            ],
            [
                'nama' => 'Bulldozer',
                'noplat' => 'DK 01287',
                'jenis_kendaraan' => 'barang',
                'status_servis' => False,
                'jadwal_servis' => '2023-12-12',
                'pemakaian_bbm' => 5,
                'status_milik' => 'perusahaan',
                'tanggal_masuk' => '2022-08-09',
            ],
            [
                'nama' => 'Bus',
                'noplat' => 'DK 02347',
                'jenis_kendaraan' => 'orang',
                'status_servis' => False,
                'jadwal_servis' => '2023-12-12',
                'pemakaian_bbm' => 8,
                'status_milik' => 'perusahaan',
                'tanggal_masuk' => '2022-08-09',
            ],
            [
                'nama' => 'Minibus',
                'noplat' => 'DK 03347',
                'jenis_kendaraan' => 'orang',
                'status_servis' => False,
                'jadwal_servis' => '2023-12-12',
                'pemakaian_bbm' => 8,
                'status_milik' => 'perusahaan',
                'tanggal_masuk' => '2022-08-09',
            ],
            [
                'nama' => 'Mobil ',
                'noplat' => 'DK 08347',
                'jenis_kendaraan' => 'orang',
                'status_servis' => False,
                'jadwal_servis' => '2023-12-12',
                'pemakaian_bbm' => 8,
                'status_milik' => 'perusahaan',
                'tanggal_masuk' => '2022-08-09',
            ],
        ]);
    }
}
