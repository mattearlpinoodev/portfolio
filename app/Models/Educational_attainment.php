<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational_attainment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'grade_level',
        'year_graduate',
        'name_school',
    ];

}
