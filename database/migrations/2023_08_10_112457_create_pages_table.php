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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('home_title');
            $table->longText('home_subtitle');
            $table->string('home_pic');
            $table->string('home_bc_pic');
            $table->string('about_title');
            $table->longText('about_substitle');
            $table->string('about_pic');
            $table->string('brand_title');
            $table->longText('brand_subtitle');
            $table->string('brand_pic');
            $table->string('brand_mid_title');
            $table->string('brand_footer_title');
            $table->longText('brand_footer_subtitle');
            $table->string('brand_footer_pic');
            $table->string('work_title');
            $table->string('voucher_title');
            $table->string('contact_title');
            $table->string('contact_location');
            $table->string('contact_mail');
            $table->string('footer_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
