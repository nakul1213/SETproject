<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelDetails extends Model
{
    use HasFactory;
    protected $table = 'hostel_details';

    protected $fillable = [
        'college_email',
        'food_habit',
        'laptop_details',
        'model_no',
        'serial_no'
    ];
}
