<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;
use App\Models\Kendaraan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKendaraanRequest $request)
    {
        $validatedData  = $request->validated();
        $validatedData['jadwal_servis'] = Carbon::now()->addYear();
        Kendaraan::create($validatedData);
        return redirect('kendaraan');
    }

    public function edit($id)
    {
        //
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.ubah', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekendaraanRequest $request, $id)
    {
        //
        $validatedData  = $request->validated();
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($validatedData);
        return redirect('kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect('kendaraan');
    }
}
