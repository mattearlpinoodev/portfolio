<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'birthday',
        'religion',
        'degree',
        'city',
        'age',
        'phone_number',
        'email',
        'gender'
    ];
}
