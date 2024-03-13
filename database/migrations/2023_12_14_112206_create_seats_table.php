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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('header1')->nullable();
            $table->string('icon1')->nullable();
            $table->string('image1')->nullable();
            $table->longText('content1')->nullable();
            $table->string('header2')->nullable();
            $table->longText('content2')->nullable();
            $table->longText('content3')->nullable();
            $table->longText('content4')->nullable();
            $table->string('image2')->nullable();
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
