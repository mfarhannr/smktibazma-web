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
        Schema::create('katalog_talenta', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('name');
            $table->string('bidang');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('github');
            $table->integer('nomor');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_katalog_talenta');
    }
};
