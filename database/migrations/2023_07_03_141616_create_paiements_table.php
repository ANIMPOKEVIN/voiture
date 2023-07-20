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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->date('date');
            $table->string('payment_method');
            $table->dateTime('created');
            $table->dateTime('modify');
            $table->dateTime('deleted');
            $table->foreignId('reservation_id')->constrained();
            $table->foreignId('user_id')->constrained();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
