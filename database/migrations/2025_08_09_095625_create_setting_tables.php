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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->boolean('sound')->default(true);
            $table->string('profile_image_id', 12)->default(0);
            $table->string('profile_bg_id', 12)->default(0);
            $table->string('profile_language_id', 2)->default('id');

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });

        Schema::create('profile_images', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->string('url', length: 255);
        });

        Schema::create('profile_backgrounds', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->string('url', length: 255);
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->string('id', 2)->primary();
            $table->string('description', length: 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
        Schema::dropIfExists('profile_images');
        Schema::dropIfExists('profile_backgrounds');
        Schema::dropIfExists('languages');
    }
};
