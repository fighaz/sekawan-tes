<?php

namespace App\Exports;

use App\Models\Pemesanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class PemesananExport implements FromView
{
    /**
     */
    public function view(): View
    {
        return view('export.pemesanan', [
            'pemesanan' => Pemesanan::with([
                'pemesan',
                'driver',
                'supervisor',
                'lokasi',
                'kendaraan',
            ])->get()
        ]);
    }
}
