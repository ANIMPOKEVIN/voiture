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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('mark');
            $table->string('model');
            $table->char('vehicle_image');
            $table->string('color');
            $table->string('transmission');
            $table->string('availability');
            $table->integer('price_per_hour');
            $table->foreignId('agence_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('type_vehicule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
