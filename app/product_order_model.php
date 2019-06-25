<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_order_model extends Model
{
		protected $table = "product_order";
        protected $fillable = [
        'product_id','product_unique_id','product_name','product_price','u_id','email', 'domain','site','doamin_lid','domain_pass', 'search','domain_cost','demo2','cpanel_link', 'cpanel_id','cpanel_pass','hosting_cost','content_size', 'content','total','status','message','method','mobile','transaction',
   ];
}
