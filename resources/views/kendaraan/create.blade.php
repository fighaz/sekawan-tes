@extends('layout.index')
@section('konten')
    <div class="container">
        <form action="{{ url('kendaraan/store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama" required>
                </div>
                <div class="col">
                    <label for="">No Plat</label>
                    <input class="form-control" type="text" name="noplat" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="">Pemakaian BBM (KM / L)</label>
                        <input class="form-control" type="number" name="pemakaian_bbm" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input class="form-control" type="date" name="tanggal_masuk" required>
                    </div>
                </div>
            </div>
            <div class="row  mt-1">
                <div class="col">
                    <label for="">Status Milik Kendaraan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_milik" id="status_milik1"
                            value="perusahaan">
                        <label class="form-check-label" for="status_milik1">
                            Milik Perusahaan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_milik" id="status_milik2"
                            value="sewa">
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
                            value="barang">
                        <label class="form-check-label" for="jenis_kendaraan1">
                            Kendaraan Barang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kendaraan" id="jenis_kendaraan2"
                            value="orang">
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
