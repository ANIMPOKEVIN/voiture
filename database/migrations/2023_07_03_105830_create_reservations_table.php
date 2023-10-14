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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('id_vehicle');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('place_of_care');
            $table->string('place_of_deposit');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('status');
            $table->string('price_per_hour');
            $table->text('heur');
            $table->integer('prix');
            $table->foreignId('User')->constrained();
          

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
