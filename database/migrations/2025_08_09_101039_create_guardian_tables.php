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
        Schema::create('guardian_links', function (Blueprint $table) {
            $table->uuid('guardian_id');
            $table->uuid('user_id');

            $table->primary(['guardian_id', 'user_id']);
        });

        Schema::create('guardians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardian_links');
        Schema::dropIfExists('guardians');
    }
};
