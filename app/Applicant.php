<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';
    protected $fillable = ['applicant_lname', 'applicant_fname', 'applicant_sname', 'app_marital_stat', 'court_file_no', 'divorced_city', 'divorced_country', 'applicant_religion', 'applicant_dob', 'applicant_age', 'app_birth_country', 'app_province', 'parents1_fname', 'parents1_lname', 'parents1_sname', 'parents1_country', 'parents1_province', 'parents2_fname', 'parents2_lname', 'parents2_sname', 'parents2_country', 'parents2_province', 'app_prsnt_street', 'app_prsnt_apt', 'app_prsnt_city', 'app_prsnt_country', 'app_prsnt_province', 'app_prsnt_pcode', 'app_prsnt_phone'];
}
