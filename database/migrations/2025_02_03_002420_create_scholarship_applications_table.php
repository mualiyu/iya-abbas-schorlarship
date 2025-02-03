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
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->string('institution');
            $table->string('registration_no')->unique();
            $table->string('course_of_study');
            $table->integer('duration');
            $table->string('level');
            $table->string('year_of_admission');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->longText('permanent_address');
            $table->string('bank_name');
            $table->string('account_number', 10);
            $table->string('gsm_number');
            $table->string('email')->unique();
            $table->string('voter_card')->nullable();
            $table->string('admission_letter')->nullable();
            $table->string('last_semester_result')->nullable();
            $table->string('registration_receipt')->nullable();
            $table->string('indigene_letter')->nullable();
            $table->string('ssce')->nullable();
            $table->string('passport_photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('local_government')->nullable();
            $table->string('ward')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_applications');
    }
};
