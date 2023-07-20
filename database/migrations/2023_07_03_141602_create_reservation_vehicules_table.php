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
        Schema::create('reservation_vehicules', function (Blueprint $table) {
            $table->id();
            $table->integer('price_per_hour');
            $table->foreignId('vehicule_id')->constrained();
            $table->foreignId('reservation_id')->constrained();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_vehicules');
    }
};
