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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();  // Primary key for the order
            $table->uuid('ref')->unique();  // Unique reference ID (UUID)
            $table->unsignedBigInteger('user_id');  // Foreign key to users table
            $table->json('shein_url');  // URL of the product on Shein
            $table->integer('items')->default(1);
            $table->decimal('price_from_shein', 10, 2);  // Price from Shein (in original currency)
            $table->decimal('price_in_nle', 10, 2);  // Price in NLE (converted from Shein price)
            $table->decimal('total_cost', 10, 2);  // Total cost including delivery
            $table->enum('delivery_type', ['free', 'paid']);  // Delivery type (free/paid)
            $table->decimal('delivery_cost', 10, 2)->nullable();  // Delivery cost (nullable if free)
            $table->enum('status', ['pending', 'verified', 'completed', 'cancelled']);  // Order status
            $table->string('address');  // Address for delivery
            $table->json('product_images')->nullable();  // Store up to 10 images as a JSON array
            $table->timestamps();  // Timestamps for created_at and updated_at

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
