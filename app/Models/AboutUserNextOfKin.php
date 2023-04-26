<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUserNextOfKin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'fullname',
        'relationship',
        'address',
        'telephone',
        'cellphone',
    ];
}
