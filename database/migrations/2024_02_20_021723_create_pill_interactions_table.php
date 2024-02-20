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
        Schema::create('pill_interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pill_1_id')->constrained('pills','id')->cascadeOnDelete();
            $table->foreignId('pill_2_id')->constrained('pills','id')->cascadeOnDelete();
            $table->string('interaction_type');
            $table->string('interaction_description');
            $table->string('guides');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pill_interactions');
    }
};