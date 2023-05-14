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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('seatno')->nullable();
            $table->string('ticketno');
            $table->string('pnrno');
            $table->string('ssrsno')->nullable();
            $table->string('seqno');
            $table->double('bagsandweight');
            $table->string('status')->nullable();
            $table->foreignId('flightid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
