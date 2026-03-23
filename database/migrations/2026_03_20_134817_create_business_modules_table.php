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
        Schema::create('business_modules', function (Blueprint $table) {
            $table->foreignUuid('business_id')->references('id')->on('businesses');
            $table->foreignUuid('module_id')->references('id')->on('modules');
            $table->boolean('enabled');
            $table->timestamps();
            $table->primary(['business_id', 'module_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_modules');
    }
};
