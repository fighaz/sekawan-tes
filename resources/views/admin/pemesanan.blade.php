@extends('layout.index')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pemesanan</h1>
        <a href="{{ url('/pemesanan-export') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Export Pemesanan</a>
    </div>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>No Peminjaman</th>
                <th>Nama Pemesan</th>
                <th>Nama Driver</th>
                <th>Nama Kendaraan</th>
                <th>No Plat</th>
                <th>Lokasi Pemakaian</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Nama Supervisor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->pemesan->nama }}</td>
                    <td>{{ $p->driver->nama }}</td>
                    <td>{{ $p->kendaraan->nama }}</td>
                    <td>{{ $p->kendaraan->noplat }}</td>
                    <td>{{ $p->lokasi->nama }}</td>
                    <td>{{ $p->tanggal_pinjam }} </td>
                    <td>{{ $p->tanggal_kembali }}</td>
                    <td>{{ $p->status }}</td>
                    <td>{{ $p->supervisor->nama }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
