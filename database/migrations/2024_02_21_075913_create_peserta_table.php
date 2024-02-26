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
        Schema::create('peserta', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nama');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verify_key');
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
            $table->tinyInteger('kategori_organisasi_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('kategori_organisasi_id')->references('id')->on('kategori_organisasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
