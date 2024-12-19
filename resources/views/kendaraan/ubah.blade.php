@extends('layout.index')
@section('konten')
    <div class="container">
        <form action="{{ url('/kendaraan/update/' . $kendaraan->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $kendaraan->nama }}" required>
                </div>
                <div class="col">
                    <label for="">No Plat</label>
                    <input class="form-control" type="text" name="noplat" value="{{ $kendaraan->noplat }}"required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="">Pemakaian BBM (KM / L)</label>
                        <input class="form-control" type="number" name="pemakaian_bbm"
                            value="{{ $kendaraan->pemakaian_bbm }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input class="form-control" type="date" name="tanggal_masuk"
                            value="{{ $kendaraan->tanggal_masuk }}" required>
                    </div>
                </div>
            </div>
            <div class="row  mt-1">
                <div class="col">
                    <label for="">Status Milik Kendaraan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_milik" id="status_milik1"
                            value="perusahaan"{{ $kendaraan->status_milik == 'perusahaan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_milik1">
                            Milik Perusahaan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_milik" id="status_milik2" value="sewa"
                            {{ $kendaraan->status_milik == 'sewa' ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_milik2">
                            Sewa
                        </label>
                    </div>
                </div>

            </div>
            <div class="row mt-1">
                <div class="col">
                    <label for="">Jenis Kendaraan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kendaraan" id="jenis_kendaraan1"
                            value="barang" {{ $kendaraan->jenis_kendaraan == 'barang' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenis_kendaraan1">
                            Kendaraan Barang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kendaraan" id="jenis_kendaraan2"
                            value="orang" {{ $kendaraan->jenis_kendaraan == 'orang' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenis_kendaraan2">
                            Kendaraan Orang
                        </label>
                    </div>
                </div>
            </div>


            <input type="hidden" name="status_servis" value="0">
            <input type="submit" value="submit" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
