<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lokasis')->insert([
            [
                'nama' => 'Palembang',
                'keterangan' => 'Tambang Emas',
            ],
            [
                'nama' => 'Pekanbaru',
                'keterangan' => 'Tambang Nikel'
            ],
            [
                'nama' => 'Riau',
                'keterangan' => 'Tambang Bauksit'
            ],
            [
                'nama' => 'Manukwari',
                'keterangan' => 'Tambang Emas',
            ],
            [
                'nama' => 'Medan',
                'keterangan' => 'Tambang Nikel'
            ],
            [
                'nama' => 'Banyuwangi',
                'keterangan' => 'Tambang Bauksit'
            ]
        ]);
    }
}
