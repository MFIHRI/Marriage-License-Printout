<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_lname')->nullable();
            $table->string('applicant_fname')->nullable();
            $table->string('applicant_sname')->nullable();
            $table->tinyInteger('app_marital_stat');
            $table->string('court_file_no')->nullable();
            $table->string('divorced_city')->nullable();
            $table->string('divorced_country')->nullable();
            $table->string('applicant_religion');
            $table->date('applicant_dob');
            $table->string('applicant_age');
            $table->string('app_birth_country');
            $table->string('app_province');
            $table->string('parents1_fname')->nullable();
            $table->string('parents1_lname')->nullable();
            $table->string('parents1_sname')->nullable();
            $table->string('parents1_country');
            $table->string('parents1_province');
            $table->string('parents2_fname')->nullable();
            $table->string('parents2_lname')->nullable();
            $table->string('parents2_sname')->nullable();
            $table->string('parents2_country');
            $table->string('parents2_province');
            $table->string('app_prsnt_street');
            $table->string('app_prsnt_apt');
            $table->string('app_prsnt_city');
            $table->string('app_prsnt_country');
            $table->string('app_prsnt_province');
            $table->string('app_prsnt_pcode');
            $table->string('app_prsnt_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
