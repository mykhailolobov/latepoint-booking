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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('short_description')->nullable();
            $table->tinyInteger('is_price_variable')->nullable();
            $table->decimal('price_min', 20, 4)->nullable();
            $table->decimal('price_max', 20, 4)->nullable();
            $table->decimal('charge_amount', 20, 4)->nullable();
            $table->decimal('deposit_amount', 20, 4)->nullable();
            $table->tinyInteger('is_deposit_required')->nullable();
            $table->string('duration_name', 255)->nullable();
            $table->integer('duration');
            $table->integer('buffer_before')->nullable();
            $table->integer('buffer_after')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('order_number')->nullable();
            $table->integer('selection_image_id')->nullable();
            $table->integer('description_image_id')->nullable();
            $table->string('bg_color', 20)->nullable();
            $table->integer('timeblock_interval')->nullable();
            $table->integer('capacity_min')->nullable();
            $table->integer('capacity_max')->nullable();
            $table->string('status', 20);
            $table->string('visibility', 20);
            $table->timestamps();
            $table->string('override_default_booking_status', 255)->nullable();

            $table->index('category_id');
            $table->index('order_number');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
