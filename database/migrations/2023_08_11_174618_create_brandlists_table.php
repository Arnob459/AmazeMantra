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
        Schema::create('brandlists', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('title');
            $table->longText('point1');
            $table->longText('point2');
            $table->longText('point3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brandlists');
    }
};
