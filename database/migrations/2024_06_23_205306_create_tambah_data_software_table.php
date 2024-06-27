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
        Schema::create('tambah_data_software', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_aplikasi')->nullable();
            $table->string('tahun')->nullable();
            $table->string('no_inventaris')->nullable();
            $table->string('nama_aplikasi')->nullable();
            $table->string('pengguna')->nullable();
            $table->string('divisi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_data_software');
    }
};
