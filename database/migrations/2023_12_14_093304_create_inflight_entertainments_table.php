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
        Schema::create('inflight_entertainments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image1');
            $table->longText('content1');
            $table->longText('content2');
            $table->string('language')->default('en');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inflight_entertainments');
    }
};
