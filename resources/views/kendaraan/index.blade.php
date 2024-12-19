@extends('layout.index')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kendaraan</h1>
        <a href="/kendaraan/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Tambah Kendaraan</a>
    </div>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Plat</th>
                <th>Jenis Kendaraan</th>
                <th>Jadwal Servis</th>
                <th>Pemakaian BBM</th>
                <th>Status Servis</th>
                <th>Status Milik</th>
                <th>Tanggal Masuk</th>
                {{ session('jabatan ') == 'admin' ? '<th>Aksi</th>' : '' }}
            </tr>
        </thead>
        <tbody>
            @foreach ($kendaraan as $k)
                <tr>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->noplat }}</td>
                    <td>{{ $k->jenis_kendaraan }}</td>
                    <td>{{ $k->jadwal_servis }}</td>
                    <td>{{ $k->pemakaian_bbm }} KM/L</td>
                    <td>{{ $k->status_servis ? 'Proses Servis' : 'Tidak Servis' }}</td>
                    <td>{{ $k->status_milik }}</td>
                    <td>{{ $k->tanggal_masuk }}</td>
                    @if (session('jabatan') == 'admin')
                        <td>
                            <a href="{{ url('kendaraan/edit/' . $k->id) }}" class="btn-sm btn-secondary">Ubah</a>
                        </td>
                    @else
                    @endif

                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
