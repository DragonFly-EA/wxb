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
        Schema::create('check_in_onlines', function (Blueprint $table) {
            $table->id();
            $table->String('header')->nullable();
            $table->String('header1')->nullable();
            $table->String('title1')->nullable();
            $table->string('image1')->nullable();
            $table->string('banner1')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('content2')->nullable();
            $table->longText('content3')->nullable();
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_in_onlines');
    }
};
