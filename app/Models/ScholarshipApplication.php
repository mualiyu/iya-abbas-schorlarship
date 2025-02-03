<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScholarshipApplication extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'institution',
        'registration_no',
        'course_of_study',
        'duration',
        'level',
        'year_of_admission',
        'date_of_birth',
        'marital_status',
        'permanent_address',
        'bank_name',
        'account_number',
        'gsm_number',
        'email',
        'voter_card',
        'admission_letter',
        'last_semester_result',
        'registration_receipt',
        'indigene_letter',
        'ssce',
        'passport_photo',
        'signature',
        'local_government',
        'ward',
    ];
}
