<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('jeemain_ap_no');
            $table->string('inst_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->bigInteger('contact_no');
            $table->string('category');
            $table->string('alotted_category');
            $table->string('dob');
            $table->string('gender');
            $table->enum('prep', ['yes', 'no']) ;
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            
            $table->string('p_ad_line_1');
            $table->string('p_ad_line_2');
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->string('nationality');
            $table->string('birth_place');
            $table->enum('religion', ['Hinduism', 'Islam', 'Christianity', 'Sikhism', 'Buddhism', 'Jainism', 'Other']);
            $table->string('photo_path');
            $table->string('sign_path');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('_presonal_details');
    }
};
