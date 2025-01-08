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
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('first_name');  // First name of the user
            $table->string('last_name');  // Last name of the user
            $table->string('username');  // Username of the user
            $table->string('phone_number');  // Phone number of the user
            $table->decimal('balance', 10, 2)->default(0.00);  // Balance of the user
            $table->string('email')->unique();  // Unique email address
            $table->timestamp('email_verified_at')->nullable();  // Email verification timestamp
            $table->string('password');  // User's password
            $table->rememberToken();  // Token for "remember me" functionality
            $table->string('referral_name')->nullable();  // Name of the person who referred the user (nullable)
            $table->decimal('referred_balance', 10, 2)->default(0.00);  // The balance from referral (nullable and defaults to 0.00)
            $table->timestamps();  // Timestamps for created_at and updated_at
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
