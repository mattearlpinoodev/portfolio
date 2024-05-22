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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('role');
            $table->string('name');
            $table->string('degree')->nullable();
            $table->string('email')->unique();
            $table->string('birthday')->nullable();
            
            $table->string('gender')->nullable();
            $table->double('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('religion')->nullable();
            $table->string('city')->nullable();
            $table->string('description')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkIn_link')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
