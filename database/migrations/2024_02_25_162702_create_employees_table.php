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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lname');
            $table->string('sexe')->nullable();
            $table->string('datenais')->nullable();
            $table->string('lieunais')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('etude')->nullable();
            $table->string('societe')->nullable();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('cin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
