@extends('layout.index')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Supervisor</h1>
    </div>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>No Peminjaman</th>
                <th>Nama Peminjam</th>
                <th>Nama Kendaraan</th>
                <th>No Plat</th>
                <th>Lokasi Pemakaian</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->pemesan->nama }}</td>
                    <td>{{ $p->kendaraan->nama }}</td>
                    <td>{{ $p->kendaraan->noplat }}</td>
                    <td>{{ $p->lokasi->nama }}</td>
                    <td>{{ $p->tanggal_pinjam }} </td>
                    <td>{{ $p->tanggal_kembali }}</td>
                    @if ($p->status == 'menunggu')
                        <td>
                            <div class="col">
                                <a href="{{ url('konfirm/' . $p->id) }}" name="status" value="disetujui"
                                    class="btn-sm btn-secondary">Konfirmasi</a>
                            </div>
                            <div class="col mt-2">
                                <a href="{{ url('tolak/' . $p->id) }}" name="status" value="ditolak"
                                    class="btn-sm btn-secondary">Tolak</a>
                            </div>


                        </td>
                    @else
                        <td>{{ $p->status }}</td>
                    @endif
            @endforeach

        </tbody>

    </table>
@endsection
