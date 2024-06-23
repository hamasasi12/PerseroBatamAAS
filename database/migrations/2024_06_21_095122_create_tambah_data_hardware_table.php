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
        Schema::create('tambah_data_hardware', function (Blueprint $table) {
            $table->id();
            $table->string('no_inventaris');
            $table->string('tahun');
            $table->string('jenis');
            $table->string('merek');
            $table->string('proc');
            $table->string('ram');
            $table->string('hdd');
            $table->string('ip');
            $table->string('user');
            $table->string('unit');
            $table->string('lokasi');
            $table->string('status');
            $table->string('windows');
            $table->string('office');
            $table->string('garansi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_data_hardware');
    }
};
