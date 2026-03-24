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
        Schema::create('businesses', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('status');
            $table->foreignUuid('currency_id')->constrained('currencies');
            $table->string('referral_code')->unique();
            $table->foreignUuid('referred_by_business_id')->nullable()->default(null)->constrained('businesses');
            $table->dateTime('trial_ends_at')->default(now()->addDays(14));
            $table->timestamps();
            $table->softDeletes();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
