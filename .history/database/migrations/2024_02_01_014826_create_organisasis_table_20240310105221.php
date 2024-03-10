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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('talent_id');
            $table->foreign('talent_id')->references('id')->on('katalog_talenta');
            $table->string('nama_organisasi');
            $table->string('tanggal_organisasi');
            $table->text('deskripsi_organisasi');
            $table->string('nama_prestasi');
            $table->string('tanggal_prestasi');
            $table->text('deskripsi_prestasi');
            $table->string('nama_sertifikasi');
            $table->string('tanggal_sertifikasi');
            $table->text('deskripsi_sertifikasi');
            $table->string('nama_pengalaman');
            $table->string('tanggal_pengalaman');
            $table->text('deskripsi_pengalaman');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasis');
    }
};
