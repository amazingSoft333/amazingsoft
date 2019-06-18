<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
    protected $fillable = [
        'name', 'categoryId', 'address','fbLink','linkdLink','twLink','memberImage',
    ];
}
