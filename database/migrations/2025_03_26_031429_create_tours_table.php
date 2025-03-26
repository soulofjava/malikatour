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
        Schema::create('tours', function (Blueprint $table) {
            $table->id(); // ID unik
            $table->string('title'); // Judul tour
            $table->string('location')->nullable(); // Lokasi tour
            $table->decimal('price', 10, 2); // Harga tour
            $table->integer('duration_days'); // Durasi tour (hari)
            $table->string('image')->nullable(); // Gambar utama
            $table->boolean('is_recommended')->default(false); // Apakah direkomendasikan
            $table->text('keterangan')->nullable(); // Kolom tambahan untuk deskripsi/keterangan tour
            $table->timestamps(); // Waktu dibuat & diupdate
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
