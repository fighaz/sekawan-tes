<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PemesananFactory> */
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $with = ['lokasi', 'pemesan'];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }
    public function pemesan()
    {
        return $this->belongsTo(Pegawai::class, 'pemesan_id');
    }
    public function driver()
    {
        return $this->belongsTo(Pegawai::class, 'driver_id');
    }
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }
    public function supervisor()
    {
        return $this->belongsTo(Pegawai::class, 'supervisor_id');
    }
    public static function getPemesananBySupervisorId($id)
    {
        return self::where('supervisor_id', $id)->get();
    }
    public static function getPemesananByStatus($status)
    {
        return self::where('status', $status)->get();
    }
    public static function getPemakaianKendaraan()
    {
        $jumlahpemakaian = Pemesanan::with('kendaraan')
            ->select('kendaraan_id', DB::raw('COUNT(*) as total_pemesanan'))
            ->groupBy('kendaraan_id')
            ->get();

        return $jumlahpemakaian;
    }
}
