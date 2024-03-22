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
        Schema::create('pills_interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pill_1_id');
            $table->foreign('pill_1_id')->references('id')->on('pills')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pill_2_id');
            $table->foreign('pill_2_id')->references('id')->on('pills')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('interaction_type');
            $table->text('interaction_description');
            $table->text('guides');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pills_interactions');
    }
};