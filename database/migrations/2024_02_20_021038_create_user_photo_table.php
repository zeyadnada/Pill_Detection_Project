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
        Schema::create('user_photo', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('pill_id')->constrained('pills','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_photo');
    }
};