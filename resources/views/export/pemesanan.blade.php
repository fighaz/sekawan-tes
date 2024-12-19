<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Pemesan</th>
            <th>Nama Driver</th>
            <th>Nama Supervisor</th>
            <th>Nama Kendaraan</th>
            <th>No Plat</th>
            <th>Lokasi</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Dibuat pada</th>
            <th>Diubah pada</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($pemesanan as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->pemesan->nama }}</td>
                <td>{{ $p->driver->nama }}</td>
                <td>{{ $p->supervisor->nama }}</td>
                <td>{{ $p->kendaraan->nama }}</td>
                <td>{{ $p->kendaraan->noplat }}</td>
                <td>{{ $p->lokasi->nama }}</td>
                <td>{{ $p->tanggal_pinjam }}</td>
                <td>{{ $p->tanggal_kembali }}</td>
                <td>{{ $p->status }}</td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
