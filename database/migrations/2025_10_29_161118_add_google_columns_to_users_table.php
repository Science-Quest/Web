<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // kolom tambahan untuk integrasi Google
            $table->string('name')->nullable()->after('username');
            $table->string('google_id')->nullable()->after('password');
            $table->string('avatar')->nullable()->after('google_id');
            $table->rememberToken()->after('avatar');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['name', 'google_id', 'avatar', 'remember_token']);
        });
    }
};
