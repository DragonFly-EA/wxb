<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new

class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained();
            $table->foreignId('sub_menu_title_id')->constrained();
            $table->string('name');
            $table->string('url');
            $table->boolean('external_link')->default(false);
            $table->string('language')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submenus');
    }
};
