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
            $table->uuid('business_id');
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->uuid('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->string('status');
            $table->decimal('price_snapshot', 12);
            $table->uuid('currency_id');
            $table->foreign('currency_id')->references('id')->on('currencies');
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
