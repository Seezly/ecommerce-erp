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
        Schema::create('business_features', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('business_id')->constrained('businesses');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
            $table->unique(['business_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_features');
    }
};
