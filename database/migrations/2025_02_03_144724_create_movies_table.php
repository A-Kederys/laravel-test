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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration'); // in minutes
            $table->year('release_year'); 
            $table->string('genre')->nullable();
            $table->string('language')->nullable();
            $table->string('director')->nullable();
            $table->text('starring')->nullable(); //list of main actors
            $table->string('subtitles')->nullable(); 
            $table->string('rating')->default('N-16'); // age restriction
            $table->string('poster_url')->nullable();
            $table->string('trailer_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
