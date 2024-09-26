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
        Schema::table('users', function (Blueprint $table) {
            $table->string('lname')->nullable()->after('name');
            $table->string('phone')->nullable()->after('lname');
            $table->string('image')->nullable()->after('phone');
            $table->string('facebook_id')->nullable()->after('image');
            $table->string('google_id')->nullable()->after('facebook_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['lname', 'phone', 'image','facebook_id', 'google_id']);
        });
    }
};
