<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemesan_id')->constrained('pegawais');
            $table->foreignId('driver_id')->constrained('pegawais');
            $table->foreignId('kendaraan_id')->constrained('kendaraans')->onUpdate('cascade')
                ->onDelete('cascade');;
            $table->foreignId('lokasi_id')->constrained('lokasis');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->enum('status', ['menunggu', 'disetujui', 'digunakan', 'ditolak', 'selesai']);
            $table->foreignId('supervisor_id')->constrained('pegawais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
