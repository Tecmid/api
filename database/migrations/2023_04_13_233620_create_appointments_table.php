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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('anamnese_id')->nullable();
            $table->dateTime('date');
            $table->integer('status');
            $table->integer('payment_status');
            $table->text('notes')->nullable();
            $table->string('duration')->nullable();
            $table->json('images')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('anamnese_id')->references('id')->on('anamneses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
