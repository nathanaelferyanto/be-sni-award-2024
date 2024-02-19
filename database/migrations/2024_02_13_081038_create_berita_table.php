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
        Schema::create('berita', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('kategori_id')->unsigned();
            $table->string('slug',100)->nullable();
            $table->string('judul_berita',100)->nullable();
            $table->text('deskripsi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('file')->nullable();        
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori_berita')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
