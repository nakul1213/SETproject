<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PersonalDetail extends Model
{
    protected $table = '_personal_details';

    protected $fillable = [
        'jeemain_ap_no', 'inst_name', 'first_name', 'middle_name', 'last_name', 'email',
        'contact_no', 'category', 'alotted_category', 'dob', 'gender', 'prep',
        'country', 'state', 'city', 'pincode', 'p_ad_line_1', 'p_ad_line_2',
        'blood_group', 'nationality', 'birth_place', 'religion', 'photo_path', 'sign_path'
    ];
}
