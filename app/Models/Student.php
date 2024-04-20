<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'gender',
        'date_of_birth',
        'place_of_birth',
        'physically_challenged',
        'blood_group',
        'kashmiri_immigrant',
        'marital_status',
        'category',
        'religion',
        'nationality',
        'aadhar_card_no',
        'identification_mark',
        'father_name',
        'mother_name',
        'father_occupation',
        'mother_occupation',
        'father_gross_annual_income',
        'mother_gross_annual_income',
        'guardian_name',
        'guardian_relation',
        'parent_guardian_mobile_no',
        'parent_email',
        'present_address'
    ];
    protected $table = 'student';
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->uuid) {
                $model->uuid = Str::uuid();
            }
        });
    }
}
