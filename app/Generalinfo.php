<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalinfo extends Model
{
    protected $table = 'general_infos';
    protected $fillable = ['intented_place', 'intented_city', 'intented_mar_date', 'licence_lang', 'applicant_email'];
}
