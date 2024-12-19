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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('noplat')->unique();
            $table->enum('jenis_kendaraan', ['orang', 'barang']);
            $table->boolean('status_servis');
            $table->date('jadwal_servis');
            $table->integer('pemakaian_bbm');
            $table->enum('status_milik', ['perusahaan', 'sewa']);
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
