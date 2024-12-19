<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    /** @use HasFactory<\Database\Factories\KendaraanFactory> */
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
    public function checkKendaraan()
    {
        $available = Kendaraan::where('status_servis', 0)->whereDoesntHave('pemesanan', function ($query) {
            $query->whereIn('status', ['menunggu', 'disetujui', 'digunakan']);
        })->get();
        return $available;
    }
    public static function ubahStatus($id, $status)
    {
        $tanggal_servis_baru = Carbon::now()->addYear();
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->status_servis = $status;
        $kendaraan->jadwal_servis = $tanggal_servis_baru;
        $kendaraan->save();
    }
}
