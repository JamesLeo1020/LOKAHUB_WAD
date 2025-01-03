<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Kolom untuk judul
            $table->text('description');  // Kolom untuk deskripsi
            $table->string('image')->nullable();  // Kolom untuk gambar (nullable)
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }
    
    /**
     * Membalikkan migrasi jika terjadi kesalahan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
};
