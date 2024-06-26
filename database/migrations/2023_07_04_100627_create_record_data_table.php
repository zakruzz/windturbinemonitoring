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
        Schema::create('record_data', function (Blueprint $table) {
            $table->id();
            $table->float('voltage_1');
            $table->float('voltage_2');
            $table->float('current_1');
            $table->float('current_2');
            $table->float('rpm_1');
            $table->float('rpm_2');
            $table->float('power_1');
            $table->float('power_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_data');
    }
};
