<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    //
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }

    public static function getUserByJabatan($jabatan)
    {
        return self::where('jabatan', $jabatan)->get();
    }
}
