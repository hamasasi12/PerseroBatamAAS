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
        Schema::create('request_users', function (Blueprint $table) {
            $table->id();
            $table->string('nup')->nullable();
            $table->string('nama')->nullable();
            $table->string('divisi')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('kategori_req')->nullable();
            $table->text('deskripsi_req')->nullable();
            $table->text('alasan_req')->nullable();
            // $table->foreignId('user_id');
            $table->string('upload_gambar')->nullable();
            $table->string('upload_file')->nullable();
            // $table->string('dari_divisi');
            // $table->string('ke_divisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_users');
    }
};
