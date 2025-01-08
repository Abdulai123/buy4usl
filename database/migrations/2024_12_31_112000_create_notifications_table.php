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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // User associated with the notification
            $table->enum('type', [
                'welcome',
                'order_created',
                'funds_deposited',
                'funds_withdrawn',
                'new_referral',
                'order_verified',
                'order_needs_action',
                'order_completed'
            ]); // Notification types as ENUM
            $table->string('title'); // Title of the notification
            $table->text('message'); // Detailed message for the notification
            $table->boolean('is_read')->default(false); // Mark if the notification has been read
            $table->timestamps(); // Created at and Updated at

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
