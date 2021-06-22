<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DealofDay extends Model
{
    protected $table = 'deal_of_day';
    protected $primaryKey = 'id';
    public function productdata(){
    	 return $this->hasone('App\Model\Product', 'id', 'product_id');
    }
}
