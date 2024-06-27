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
        Schema::create('perbaikan', function (Blueprint $table) {
            $table->id();
            $table->string('no_permintaan')->nullable();
            $table->string('pic_permintaan')->nullable();
            $table->string('departemen')->nullable();
            $table->string('tanggal_permintaan')->nullable();
            $table->string('deskripsi_permintaan')->nullable();
            $table->timestamps();
        });
    }

    /**z
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perbaikan');
    }
};
