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
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->string('batch_id', 16);
            $table->string('league_id', 12);

            $table->primary(['batch_id', 'league_id']);
        });

        Schema::create('leaderboard_tracks', function (Blueprint $table) {
            $table->string('batch_id', length: 16);
            $table->uuid('user_id');
            $table->integer('points');

            $table->primary(['batch_id', 'user_id']);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });

        Schema::create('leagues', function (Blueprint $table) {
            $table->string('id', length:12);
            $table->string('name', length: 20);

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderboards');
        Schema::dropIfExists('leagues');
        Schema::dropIfExists('leaderboard-tracks');
    }
};
