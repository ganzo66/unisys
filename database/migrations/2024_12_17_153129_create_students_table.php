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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ovog');
            $table->string('name');
            $table->string('register');
            $table->integer('nas');
            $table->string('huis');
            $table->string('yas_undes');
            $table->string('graduated_school');
            $table->integer('bosgo_onoo1');
            $table->integer('bosgo_onoo2');
            $table->boolean('medical_score');
            $table->string('phone_number');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
