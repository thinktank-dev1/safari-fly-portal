<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUserHealth extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'allergies',
        'special_medication',
        'blood_type',
        'disabilities',
        'travel_insurance',
    ];
}
