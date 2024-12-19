@extends('layout.index')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ url('/pemesanan-export') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Export Pemesanan</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <canvas id="pemakaianKendaraan"></canvas>
            </div>
            <hr>
        </div>
    </div>
    {{-- <canvas id="pemakaianKendaraan" max-width="100" max-height="50"></canvas> --}}
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Plat</th>
                <th>Jenis Kendaraan</th>
                <th>Pemakaian BBM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kendaraanTersedia as $k)
                <tr>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->noplat }}</td>
                    <td>{{ $k->jenis_kendaraan }}</td>
                    <td>{{ $k->pemakaian_bbm }} KM/L</td>
                    <td>
                        <a href="{{ url('admin/pesan/' . $k->id) }}" class="btn-sm btn-secondary">Pinjam</a>
                        <a href="{{ url('admin/buat-servis/' . $k->id) }}" class="btn-sm btn-danger">Servis</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data dari controller
            const chartData = @json($formattedData);

            // Inisialisasi Chart.js
            const ctx = document.getElementById('pemakaianKendaraan').getContext('2d');
            new Chart(ctx, {
                type: 'bar', // Tipe chart bar
                data: {
                    labels: chartData.labels, // Nama-nama kendaraan
                    datasets: chartData.datasets, // Jumlah pemesanan
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Jumlah Pemesanan Kendaraan'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Pemesanan'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Nama Kendaraan'
                            }
                        }
                    }
                }
            });
        })
    </script>
@endsection
