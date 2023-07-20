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
            $table->date('year_manifacturation');
            $table->char('vehicle_image');
            $table->string('color');
            $table->string('transmission');
            $table->string('availability');
            $table->integer('price_per_hour');
            $table->dateTime('created');
            $table->dateTime('modify');
            $table->dateTime('deleted');
            $table->foreignId('agence_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('type_vehicule_id')->constrained();
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
