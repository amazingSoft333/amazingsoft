<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hfinfo extends Model
{
    protected $fillable = [
        'address','email','number','information','facebook','twitter','linkdin','skype','time',
   ];
}
