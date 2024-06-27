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
            $table->string('no_inventaris')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jenis')->nullable();
            $table->string('merek')->nullable();
            $table->string('proc')->nullable();
            $table->string('ram')->nullable();
            $table->string('hdd')->nullable();
            $table->string('ip')->nullable();
            $table->string('user')->nullable();
            $table->string('unit')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('status')->nullable();
            $table->string('windows')->nullable();
            $table->string('office')->nullable();
            $table->string('garansi')->nullable();
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
