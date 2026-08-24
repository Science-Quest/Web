<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('play_results', function (Blueprint $table) {
            // Drop the foreign key
            $table->dropForeign(['quest_id']); // Use column name in array
        });
    }

    public function down()
    {
        Schema::table('play_results', function (Blueprint $table) {
            // Recreate the foreign key if needed
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade');
        });
    }
};
