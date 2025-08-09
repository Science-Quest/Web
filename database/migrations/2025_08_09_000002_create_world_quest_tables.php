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
        Schema::create('worlds', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->string('name', length: 30);
            $table->timestamps();
        });

        Schema::create('quests', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->string('world_id', 12);
            $table->string('name', length: 30);
            $table->integer('max_level');
            $table->timestamps();

            $table->foreign('world_id')->references('id')->on('worlds')->cascadeOnDelete();
        });

        Schema::create('play_results', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('quest_id', 12);
            $table->smallInteger('level');
            $table->smallInteger('time')->default(0);
            $table->smallInteger('num_of_correct')->default(0);
            $table->integer('score')->default(0);
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('quest_id')->references('id')->on('quests')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worlds');
        Schema::dropIfExists('quests');
        Schema::dropIfExists('play_results');
    }
};
