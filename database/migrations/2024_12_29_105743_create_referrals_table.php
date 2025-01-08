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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('user_id')  // Foreign key referencing the users table
            ->constrained('users')  // This references the 'users' table
            ->onDelete('cascade');  // If user is deleted, related referrals are deleted as well
            $table->foreignId('referrer_id')  // Referrer user ID (the person who referred)
            ->nullable()
                ->constrained('users')  // This references the 'users' table
                ->onDelete('set null');  // If referrer is deleted, this field becomes null
            $table->decimal('balance', 10, 2)->default(0.00);  // Balance (in decimal format, with two decimal points)
            $table->timestamps();  // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
};
