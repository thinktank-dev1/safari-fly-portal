<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUserCatering extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'food',
        'food_dislikes',
        'vegetarian_vegan',
        'soft_drinks',
        'juices',
        'liquor',
    ];
}
