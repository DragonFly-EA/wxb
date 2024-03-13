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
        Schema::create('travel_insurances', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('title_2');
            $table->longText('content');
            $table->string('banner');
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_insurances');
    }
};
