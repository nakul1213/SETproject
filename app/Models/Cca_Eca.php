<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cca_Eca extends Model
{
    use HasFactory;
    protected $table = 'cca_ecas';

    protected $fillable = [
        'college_email',
        'cca_sports',
        'eca_sports',
        'major_game',
        'minor_game'
    ];
}
