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
        Schema::create('user_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('nric_number');
            $table->string('passport_number');
            $table->string('short_name');
            $table->string('race');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('postal_code');
            $table->string('state');
            $table->string('country');
            $table->string('country_code');
            $table->string('mobile_number');
            $table->string('employment_status');
            $table->string('religion');


 //employee
 $table->string('joining_date');
 $table->string('designation');
 $table->string('department');
 $table->string('staff_position');
 $table->string('salary_grade');

 $table->string('staff_qualification');
 $table->string('stream_type');
 $table->string('staff_category');

 $table->string('authentication');
  //medical
  $table->string('height');
  $table->string('weight');
  $table->string('allergy');


            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');


            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_personal_details');
    }
};
