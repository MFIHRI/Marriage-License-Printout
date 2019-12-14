<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJointApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joint_applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('japplicant_lname')->nullable();
            $table->string('japplicant_fname')->nullable();
            $table->string('japplicant_sname')->nullable();
            $table->tinyInteger('japp_marital_stat');
            $table->string('jcourt_file_no')->nullable();
            $table->string('jdivorced_city')->nullable();
            $table->string('jdivorced_country')->nullable();
            $table->string('japplicant_religion');
            $table->date('japplicant_dob');
            $table->string('japplicant_age');
            $table->string('japp_birth_country');
            $table->string('japp_province');
            $table->string('jparents1_fname')->nullable();
            $table->string('jparents1_lname')->nullable();
            $table->string('jparents1_sname')->nullable();
            $table->string('jparents1_country');
            $table->string('jparents1_province');
            $table->string('jparents2_fname')->nullable();
            $table->string('jparents2_lname')->nullable();
            $table->string('jparents2_sname')->nullable();
            $table->string('jparents2_country');
            $table->string('jparents2_province');
            $table->string('japp_prsnt_street');
            $table->string('japp_prsnt_apt');
            $table->string('japp_prsnt_city');
            $table->string('japp_prsnt_country');
            $table->string('japp_prsnt_province');
            $table->string('japp_prsnt_pcode');
            $table->string('japp_prsnt_phone');
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
        Schema::dropIfExists('joint_applicants');
    }
}
