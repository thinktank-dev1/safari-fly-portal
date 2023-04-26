<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullname',
        'relationship',
        'address',
        'telephone',
        'cellphone',
    ];
}
