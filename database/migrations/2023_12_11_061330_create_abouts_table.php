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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('banner')->nullable();
            $table->longText('content')->nullable();
            $table->string('title_2')->nullable();
            $table->string('banner_2')->nullable();
            $table->text('content_1')->nullable();
            $table->text('content_2')->nullable();
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
