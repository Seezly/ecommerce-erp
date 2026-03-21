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
        Schema::create('referral_earnings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('referrer_business_id')->constrained('businesses');
            $table->uuid('referred_business_id')->constrained('businesses');
            $table->decimal('amount', 12);
            $table->uuid('currency')->constrained('currencies');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_earnings');
    }
};
