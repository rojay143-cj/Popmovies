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
        Schema::create('country', function (Blueprint $table) {
            $table->id('country_id')->index();
            $table->string('country_name')->unique();
            $table->timestamps();
        });
        DB::table('country')->insert([
            ['country_name' => 'United States'],
            ['country_name' => 'Canada'],
            ['country_name' => 'United Kingdom'],
            ['country_name' => 'Australia'],
            ['country_name' => 'Germany'],
            ['country_name' => 'France'],
            ['country_name' => 'Italy'],
            ['country_name' => 'Spain'],
            ['country_name' => 'Japan'],
            ['country_name' => 'China'],
            ['country_name' => 'India'],
            ['country_name' => 'Brazil'],
            ['country_name' => 'Mexico'],
            ['country_name' => 'South Africa'],
            ['country_name' => 'Russia'],
            ['country_name' => 'South Korea'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country');
    }
};
