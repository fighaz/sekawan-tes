@extends('layout.index')
@section('konten')
    <div class="container">
        <form action="{{ url('servis/store') }}" method="post">
            @csrf
            <input type="hidden" name="kendaraan_id" value="{{ $kendaraan->id }}">
            <div class="form-group">
                <label for="">No Plat Kendaraan</label><span> = {{ $kendaraan->noplat }}</span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input class="form-control" type="date" name="tanggal_masuk" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input class="form-control" type="date" name="tanggal_selesai" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Keterangan Servis</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" required></textarea>
                </div>
            </div>

            <input type="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
@endsection
