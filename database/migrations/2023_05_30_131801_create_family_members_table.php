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
        Schema::create('family_members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('relation')->nullable();
            $table->boolean('live')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('birth_state')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('married')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_members');
    }
};
