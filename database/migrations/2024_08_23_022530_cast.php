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
        Schema::create('cast', function (Blueprint $table) {
            $table->id('cast_id')->index();
            $table->string('position');
            $table->string('cast_name')->unique();
            $table->timestamps();
        });
        DB::table('cast')->insert([
            [
                'position' => 'Director',
                'cast_name' => 'Christopher Nolan'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'Leonardo DiCarpio'
            ],
            [
                'position' => 'Supporting Actress',
                'cast_name' => 'Anne Hathaway'
            ],
            [
                'position' => 'Director',
                'cast_name' => 'Steve Spielberg'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'Sam Neill'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'Henry Thomas'
            ],
            [
                'position' => 'Lead Actres',
                'cast_name' => 'Uma Thurman'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'John Travolta'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'Jamie Foxx'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'Liam Neeson'
            ],
            [
                'position' => 'Lead Actor',
                'cast_name' => 'Christian Bale'
            ],
            [
                'position' => 'Director',
                'cast_name' => 'Quentin Tarantino'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cast');
    }
};
