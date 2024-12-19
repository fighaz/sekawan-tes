@extends('layout.index')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Servis</h1>
    </div>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Plat</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Selesai</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servis as $s)
                <tr>
                    <td>{{ $s->kendaraan->nama }}</td>
                    <td>{{ $s->kendaraan->noplat }}</td>
                    <td>{{ $s->tanggal_masuk }}</td>
                    <td>{{ $s->tanggal_selesai }}</td>
                    <td>{{ $s->keterangan }}</td>
                    <td>
                        @if ($s->kendaraan->status_servis == 1)
                            <a href="{{ url('servis_selesai/' . $s->kendaraan->id) }}" name="status_servis" value="0"
                                class="btn-sm btn-secondary">Selesai</a>
                        @else
                            Servis Selesai
                        @endif
                    </td>


                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
