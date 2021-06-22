<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BestSeller extends Model
{
    protected $table = 'best_seller';
    protected $primaryKey = 'id';
    public function productdata(){
    	 return $this->hasone('App\Model\Product', 'id', 'product_id');
    }
}
