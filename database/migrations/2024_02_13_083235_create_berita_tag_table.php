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
            $table->integerIncrements('id');
            $table->integer('berita_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('berita_id')->references('id')->on('berita')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');
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
