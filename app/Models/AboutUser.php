<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birth_date',
        'sex',
        'passport_number',
        'expire_date',
        'marital_status',
        'occupassion',
        'home_address',
        'cellphone',
        'telephone',
        'email',
        'comms_channel',
    ];
}
