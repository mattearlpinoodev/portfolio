<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
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
        'phone_number',
        'email',
        'gender'
    ];

    public function getAgeAttribute(){
        return Carbon::parse($this->attributes['birthday'])->age;
    }
}
