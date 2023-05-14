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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flightno');
            $table->date('std_date');
            $table->time('std_time');
            $table->integer('destination');
            $table->integer('aircraftid');
            $table->string('status');
            $table->date('etd_date');
            $table->time('etd_time');
            $table->integer('brd_gate');
            $table->time('brd_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
