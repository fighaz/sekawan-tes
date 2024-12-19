<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Servis;
use Illuminate\Support\Facades\Log;

class ServisController extends Controller
{
    //
    public function index()
    {
        //
        $servis = Servis::all();
        return view('servis.index', compact('servis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($idkendaraan)
    {
        //
        $kendaraan = Kendaraan::findOrFail($idkendaraan);
        return view('servis.create', compact('kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'kendaraan_id' => 'required',
            'tanggal_masuk' => 'required|date|after:now',
            'tanggal_selesai' => 'required|date|after:tanggal_masuk',
            'keterangan' => 'required',
        ]);
        Servis::create($validateData);
        Kendaraan::ubahStatus($request->kendaraan_id, True);
        Log::info('Username : {nama} Menambahkan Data Servis', ['nama' => session('username')]);
        return redirect('admin/servis');
    }

    /**
     * Display the specified resource.
     */
    public function selesai($id)
    {
        $data = Kendaraan::findOrFail($id);
        $data->status_servis = 0;
        $data->save();
        Log::info('Username : {nama} Melakukan Proses Selesai Servis', ['nama' => session('username')]);
        return redirect('admin/servis');
    }
}
