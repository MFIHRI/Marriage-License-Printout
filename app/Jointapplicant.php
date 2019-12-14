<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jointapplicant extends Model
{
    protected $table = 'joint_applicants';
    protected $fillable = ['japplicant_lname', 'japplicant_fname', 'japplicant_sname', 'japp_marital_stat', 'jcourt_file_no', 'jdivorced_city', 'jdivorced_country', 'japplicant_religion', 'japplicant_dob', 'japplicant_age', 'japp_birth_country', 'japp_province', 'jparents1_fname', 'jparents1_lname', 'jparents1_sname', 'jparents1_country', 'jparents1_province', 'jparents2_fname', 'jparents2_lname', 'jparents2_sname', 'jparents2_country', 'jparents2_province', 'japp_prsnt_street', 'japp_prsnt_apt', 'japp_prsnt_city', 'japp_prsnt_country', 'japp_prsnt_province', 'japp_prsnt_pcode', 'japp_prsnt_phone'];
}
