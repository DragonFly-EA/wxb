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
        Schema::create('baggage', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('title1')->nullable();
            $table->longText('content1')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('title3')->nullable();
            $table->longText('content3')->nullable();
            $table->string('title4')->nullable();
            $table->longText('content4')->nullable();
            $table->longText('content5')->nullable();
            $table->string('title5')->nullable();
            $table->longText('content6')->nullable();
            $table->longText('content7')->nullable();
            $table->string('title6')->nullable();
            $table->string('icon1')->nullable();
            $table->longText('content8')->nullable();
            $table->string('image2')->nullable();
            $table->string('icon2')->nullable();
            $table->string('title7')->nullable();
            $table->string('content9')->nullable();
            $table->string('image3')->nullable();
            $table->string('language')->default('en');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baggage');
    }
};
