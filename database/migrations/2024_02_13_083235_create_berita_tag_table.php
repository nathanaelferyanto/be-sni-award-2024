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
        Schema::create('berita_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('tag_id')->unsigned();
            $table->bigInteger('berita_id')->unsigned();
            // $table->foreignId('tag_id')->constrained('tag');
            // $table->foreignId('berita_id')->constrained('berita');

            $table->foreign('tag_id')->references('id')->on('tag');
            $table->foreign('berita_id')->references('id')->on('berita');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_tag');
    }
};
