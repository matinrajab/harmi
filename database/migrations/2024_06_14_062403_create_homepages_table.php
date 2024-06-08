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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('about_us');
            $table->string('about_us_image');
            $table->text('vision');
            $table->text('bidang_kesehatan');
            $table->text('bidang_pendidikan');
            $table->text('bidang_kepemudaan');
            $table->text('bidang_lingkungan');
            $table->string('cta_label');
            $table->string('cta_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
