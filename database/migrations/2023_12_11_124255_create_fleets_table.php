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
        Schema::create('fleets', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('banner')->nullable();
            $table->string('title_1')->nullable();
            $table->string('input_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('input_2')->nullable();
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fleets');
    }
};
