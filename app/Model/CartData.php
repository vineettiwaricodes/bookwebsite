<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartData extends Model
{
    protected $table = 'tbcart';
    protected $primaryKey = 'id';
     public function product(){
    	 return $this->hasone('App\Model\Product', 'id', 'product_id');
    }   
}
?>