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
        Schema::create('genre', function (Blueprint $table) {
            $table->id('genre_id')->index();
            $table->string('genre_name')->unique();
            $table->timestamps();
        });
        DB::table('genre')->insert([
            ['genre_name' => 'Action'],
            ['genre_name' => 'Adventure'],
            ['genre_name' => 'Comedy'],
            ['genre_name' => 'Drama'],
            ['genre_name' => 'Sci-Fi'],
            ['genre_name' => 'Sports'],
            ['genre_name' => 'Family'],
            ['genre_name' => 'Suspense'],
            ['genre_name' => 'Fantasy'],
            ['genre_name' => 'Thriller'],
            ['genre_name' => 'Horror'],
            ['genre_name' => 'Musical'],
            ['genre_name' => 'Animation'],
            ['genre_name' => 'War'],
            ['genre_name' => 'Kids'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre');
    }
};
