<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_order_model extends Model
{
        protected $fillable = [
        'product_id','product_unique_id', 'domain','site','doamin_lid','domain_pass', 'search','domain_cost','demo2','cpanel_link', 'cpanel_id','cpanel_pass','hosting_cost','content_size', 'content','total'
   ];
}
