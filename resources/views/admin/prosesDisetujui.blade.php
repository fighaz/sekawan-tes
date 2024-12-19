@extends('layout.index')
@section('konten')
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>No Peminjaman</th>
                <th>Nama Peminjam</th>
                <th>Nama Supervisor</th>
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
                    <td>{{ $p->supervisor->nama }}</td>
                    <td>{{ $p->kendaraan->nama }}</td>
                    <td>{{ $p->kendaraan->noplat }}</td>
                    <td>{{ $p->lokasi->nama }}</td>
                    <td>{{ $p->tanggal_pinjam }} </td>
                    <td>{{ $p->tanggal_kembali }}</td>
                    <td><a href="{{ url('dipesan/' . $p->id) }}" name="status" value="disetujui"
                            class="btn-sm btn-secondary">Konfirmasi</a></td>

                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
