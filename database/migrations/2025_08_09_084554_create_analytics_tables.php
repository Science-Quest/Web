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
        Schema::create('user_stats', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->string('league_id', 12)->nullable();
            $table->tinyInteger('health')->default(5);
            $table->bigInteger('points')->default(0);
            $table->string('highest_league', 12)->nullable();
            $table->integer('daily_streak')->default(0);
            $table->integer('highest_streak')->default(0);

            $table->primary('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('league_id')->references('id')->on('leagues')->noActionOnDelete();
        });

        Schema::create('user_total_progress_reports', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->string('world_id', 12);
            $table->integer('current_completed_levels')->default(0);
            $table->integer('last_week_completed_levels')->default(0);

            $table->primary(['user_id', 'world_id']);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('world_id')->references('id')->on('worlds')->noActionOnDelete();
        });

        Schema::create('user_skill_reports', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->string('world_id', 12);
            $table->bigInteger('total_score')->default(0);
            $table->integer('last_week_total_score')->default(0);

            $table->primary(['user_id', 'world_id']);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('world_id')->references('id')->on('worlds')->noActionOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_stats');
        Schema::dropIfExists('user_total_progress_reports');
        Schema::dropIfExists('user_skill_reports');
        Schema::dropIfExists('daily_usage_reports');
    }
};
