<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('tanaman', function (Blueprint $table) {
            // Kolom ID (Primary Key & Auto Increment)
            $table->id(); 

            // Kolom untuk Nama Tanaman
            $table->string('nama', 150)->unique(); 
            
            // Kolom untuk Deskripsi (Teks Panjang)
            $table->text('deskripsi')->nullable();
            
            // Kolom untuk Sumber Informasi
            $table->string('sumber', 255)->nullable(); 

            // Kolom Timestamps (created_at dan updated_at)
            $table->timestamps(); 
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanaman');
    }
};