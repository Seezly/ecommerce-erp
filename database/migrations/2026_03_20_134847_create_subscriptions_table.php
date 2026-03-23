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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('business_id')->references('id')->on('businesses');
            $table->foreignUuid('plan_id')->references('id')->on('plans');
            $table->string('status');
            $table->decimal('price_snapshot', 12);
            $table->foreignUuid('currency_id')->references('id')->on('currencies');
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
