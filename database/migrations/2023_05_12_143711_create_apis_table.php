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
        Schema::create('apis', function (Blueprint $table) {
            $table->foreignId('passengerID');
            $table->date('dob');
            $table->string('gender');
            $table->string('nationality');
            $table->foreignId('countryOfResidence');
            $table->string('documentType');
            $table->string('documentNo');
            $table->date('documentExpiry');
            $table->foreignId('countryOfIssue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apis');
    }
};
