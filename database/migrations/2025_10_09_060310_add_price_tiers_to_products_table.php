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
        Schema::table('products', function (Blueprint $table) {
             $table->decimal('tier_2_5', 10, 2)->nullable();
        $table->decimal('tier_6_60', 10, 2)->nullable();
        $table->decimal('tier_61_120', 10, 2)->nullable();
        $table->decimal('tier_121_600', 10, 2)->nullable();
        $table->decimal('tier_600_plus', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
