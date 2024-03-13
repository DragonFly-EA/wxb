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
        Schema::create('lounges', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('title1');
            $table->string('icon1');
            $table->string('title2');
            $table->string('image2');
            $table->longText('content1');
            $table->string('icon2');
            $table->string('title3');
            $table->string('image3');
            $table->longText('content2');
            $table->string('icon3');
            $table->string('title4');
            $table->string('image4');
            $table->longText('content3');
            $table->string('image5');
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lounges');
    }
};
