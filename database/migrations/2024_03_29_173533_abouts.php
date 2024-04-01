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
    Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('birthday')->nullable();
            $table->string('religion')->nullable();
            $table->string('degree')->nullable();
            $table->string('city')->nullable();
            $table->integer('age')->nullable();
            $table->double('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->timestamps();

        });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
