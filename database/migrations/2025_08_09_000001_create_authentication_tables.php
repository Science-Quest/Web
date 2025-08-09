<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username', length: 30);
            $table->string('email', length: 255)->nullable();
            $table->string('password', length: 255);
            $table->date('birth_date');
            $table->timestamps();
        });
    
        Schema::create('user_sessions', function (Blueprint $table) {
            $table->string('session_id', length: 32)->primary();
            $table->uuid('user_id');
            $table->string('user_agent', length:255);
            $table->text('access_token');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('expires_at');

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });

        Schema::create('otp_tokens', function (Blueprint $table) {
            $table->string('id', length: 32)->primary();
            $table->uuid('user_id');
            $table->string('action', length: 255);
            $table->string('otp_hash', length: 128);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('expires_at');

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_sessions');
        Schema::dropIfExists('otp_tokens');
    }
};
