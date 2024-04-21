<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('physically_challenged');
            $table->string('blood_group');
            $table->string('kashmiri_immigrant');
            $table->string('marital_status');
            $table->string('category');
            $table->string('religion');
            $table->string('nationality');
            $table->string('aadhar_card_no');
            $table->string('identification_mark');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->string('father_gross_annual_income');
            $table->string('mother_gross_annual_income');
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->string('parent_guardian_mobile_no');
            $table->string('parent_email');
            $table->string('present_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
};
