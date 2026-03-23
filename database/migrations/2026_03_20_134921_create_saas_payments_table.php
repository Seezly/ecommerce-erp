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
        Schema::create('saas_payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('business_id');
            $table->decimal('amount', 12);
            $table->foreignUuid('currency_id');
            $table->string('status');
            $table->string('method');
            $table->string('transaction_id')->unique();
            $table->string('idempotency_key')->unique();
            $table->json('external_payload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saas_payments');
    }
};
