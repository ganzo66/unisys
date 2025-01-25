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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('ovog');
            $table->string('name');
            $table->string('register');
            $table->integer('nas');
            $table->string('huis');
            $table->string('yas_undes');
            $table->string('graduated_school');
            $table->string('graduated_university');
            $table->string('profession');
            $table->string('academic_degree');
            $table->string('foreign_language1');
            $table->string('foreign_language2');
            $table->string('work_experience1');
            $table->string('work_experience2');
            $table->string('work_experience3');
            $table->string('work_experience4');
            $table->string('work_experience5');
            $table->string('shagnal1');
            $table->string('shagnal2');
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->string('home_address');
            $table->foreignId('role_id')->nullable()->constrained('roles')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
