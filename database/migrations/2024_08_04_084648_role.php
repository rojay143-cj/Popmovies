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
        Schema::create('role', function (Blueprint $table) {
            $table->id('role_id');
            $table->enum('role_name',['Admin', 'Guess', 'Premium']);
            $table->string('description');
            $table->timestamps();
        });

        DB::table('role')->insert([
            [
                'role_id' => '10',
                'role_name' => 'Guess',
                'description' => 'Visitor'
            ],
            [
                'role_id' => '100',
                'role_name' => 'Premium',
                'description' => 'Paid User'
            ],
            [   
                'role_id' => '1000',
                'role_name' => 'Admin', 
                'description' => 'Owner'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};
