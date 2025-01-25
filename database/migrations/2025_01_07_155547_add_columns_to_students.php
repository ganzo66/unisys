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
        Schema::table('students', function (Blueprint $table) {
            $table->string('songoson_angi')->after('address');
            $table->string('student_email')->unique()->after('songoson_angi');
            $table->string('student_email_password')->after('student_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['songoson_angi', 'student_email', 'student_email_password']);
            //
        });
    }
};
