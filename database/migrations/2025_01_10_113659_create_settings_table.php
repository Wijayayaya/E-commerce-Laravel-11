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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discounted_product_id')->constrained('products')->onDelete('cascade');
            $table->decimal('discounted_percent', 10, 2);
            $table->string('discounted_heading');
            $table->text('discounted_subheading');
            $table->foreignId('featured_product_1_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->foreignId('featured_product_2_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
