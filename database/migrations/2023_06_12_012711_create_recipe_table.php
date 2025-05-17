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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->timestamp('preparation_time')->nullable(false);
            $table->timestamp('cooking_time')->nullable(false);
            $table->string('description');
            $table->string('preparation_instructions');
            $table->string('portions');
            $table->timestamp('total_time')->nullable(false);
            $table->string('levels_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
