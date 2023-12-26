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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('writer_id')->constrained(); // Tambahkan kolom writer_id dan definisikan sebagai foreign key ke tabel writers
            $table->string("title", 200)->nullable();
            $table->string("published_year", 100)->nullable();
            $table->string("publisher", 100)->nullable();
            $table->string("description", 1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
