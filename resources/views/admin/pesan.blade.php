@extends('layout.index')
@section('konten')
    <div class="container">
        <form action="{{ url('admin/store') }}" method="post">
            @csrf
            <input type="hidden" name="kendaraan_id" value="{{ $kendaraan->id }}">
            <div class="form-group">
                <label for="">No Plat Kendaraan</label><span> = {{ $kendaraan->noplat }}</span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="Nama">Nama Driver</label>
                        <select class="form-control" name="driver_id">
                            @foreach ($driver as $d)
                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mb-3">
                        <label for="Nama">Nama Pemesan</label>
                        <select class="form-control" name="pemesan_id">
                            @foreach ($pegawai as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="Nama">Pilih Supervisor</label>
                        <select class="form-control" name="supervisor_id">
                            @foreach ($supervisor as $s)
                                <option value="{{ $s->id }}">{{ $s->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mb-3">
                        <label for="kategori">Lokasi</label>
                        <select class="form-control" name="lokasi_id">
                            @foreach ($lokasi as $l)
                                <option value="{{ $l->id }}">{{ $l->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Pinjam</label>
                        <input class="form-control" type="date" id="tanggal_pinjam" name="tanggal_pinjam" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input class="form-control" type="date"id="tanggal_kembali" name="tanggal_kembali" required>
                    </div>
                </div>
            </div>



            <input type="hidden" name="status" value="menunggu">
            <input type="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const datePicker = document.getElementById('tanggal_pinjam');
            const today = new Date().toISOString().split('T')[0];
            datePicker.setAttribute('min', today);
        });
        document.addEventListener('DOMContentLoaded', function() {
            const datePicker = document.getElementById('tanggal_kembali');
            const today = new Date().toISOString().split('T')[0];
            datePicker.setAttribute('min', today);
        });
    </script>
@endsection
