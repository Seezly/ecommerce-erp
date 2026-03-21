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
        Schema::create('model_has_roles', function (Blueprint $table) {
            $table->uuid('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->uuid('permission_id');
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->uuid('business_id');
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->timestamps();
            $table->primary(['role_id', 'permission_id', 'business_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_has_roles');
    }
};
