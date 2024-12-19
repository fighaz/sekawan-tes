<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SupervisorController extends Controller
{
    //
    public function getPemesananBySupervisor()
    {
        $pemesanan = Pemesanan::getPemesananBySupervisorId(session('id'));
        return view("supervisor.index", compact("pemesanan"));
    }

    public function konfirmSupervisor($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->status = "disetujui";
        $pemesanan->save();
        Log::info('Username : {nama} Konfirmasi Pemesanan', ['nama' => session('username')]);
        return redirect("supervisor");
    }
    public function tolakSupervisor($id)
    {
        $data = Pemesanan::find($id);
        $data->status = "ditolak";
        $data->save();
        Log::info('Username : {nama} Tolak Pemesanan', ['nama' => session('username')]);
        return redirect('supervisor');
    }
}
