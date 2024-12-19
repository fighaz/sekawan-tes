<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Exports\PemesananExport;
use App\Http\Requests\StorePemesananRequest;
use App\Http\Requests\UpdatePemesananRequest;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\Lokasi;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $model = new Kendaraan();
        $kendaraanTersedia = $model->checkKendaraan();
        $data = Pemesanan::getPemakaianKendaraan();
        $formattedData = [
            'labels' => [], // Nama bulan
            'datasets' => [],
        ];

        // Kelompokkan data berdasarkan kendaraan
        $formattedData = [
            'labels' => $data->pluck('kendaraan.nama'), // Nama kendaraan
            'datasets' => [
                [
                    'label' => 'Jumlah Pemesanan',
                    'data' => $data->pluck('total_pemesanan'), // Jumlah pemesanan
                    'backgroundColor' => 'rgba(75, 192, 192, 0.5)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];
        return view("admin.index", compact('kendaraanTersedia', 'formattedData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($idkendaraan)
    {
        //
        $kendaraan = Kendaraan::findOrFail($idkendaraan);
        $lokasi = Lokasi::all();
        $driver = Pegawai::getUserByJabatan("driver");
        $pegawai = Pegawai::getUserByJabatan("pegawai");
        $supervisor = Pegawai::getUserByJabatan("supervisor");
        return view("admin.pesan", compact('lokasi', 'pegawai', 'kendaraan', 'supervisor', 'driver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePemesananRequest $request)
    {
        //

        $validateData = $request->validated();
        Pemesanan::create($validateData);
        Log::info('Username : {nama} Menambahkan Data Pemesanan', ['nama' => session('username')]);
        return redirect('admin/pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemesanan $pemesanan)
    {
        //
        $pemesanan = Pemesanan::all();
        return view('admin.pemesanan', compact('pemesanan'));
    }
    public function getPemesananAdmin()
    {
        $pemesanan = Pemesanan::getPemesananNeedToAssign();
        return view('admin.pemesanan', compact('pemesanan'));
    }
    public function getApprovedAdmin()
    {
        $pemesanan = Pemesanan::getPemesananByStatus("disetujui");
        return view('admin.prosesDisetujui', compact('pemesanan'));
    }
    public function prosesPesanan($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->status = "digunakan";
        $pemesanan->save();
        Log::info('Username : {nama} Melakukan Proses Pemesanan', ['nama' => session('username')]);
        return redirect("admin");
    }
    public function export()
    {
        // return Excel::download(new PemesananExport, 'penesanan.xlsx');
        Log::info('Username : {nama} Download data Pemesanan', ['nama' => session('username')]);
        return Excel::download(new PemesananExport, 'pemesanan.xlsx');
    }
}
