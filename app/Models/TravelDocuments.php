<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelDocuments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'flights',
        'booking_confirmation',
        'passport',
        'travel_insurance',
        'global_rescue',
    ];
}
