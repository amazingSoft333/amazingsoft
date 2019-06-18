<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceo extends Model
{
    protected $fillable = [
        'name','designation','information','ceoImage',
   ];
}
