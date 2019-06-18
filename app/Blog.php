<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'blogTitle','categoryId', 'information', 'blogImage',
    ];
}
