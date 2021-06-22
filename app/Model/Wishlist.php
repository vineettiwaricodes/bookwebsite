<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $primaryKey = 'id';

    //  public function productdata()
    // {      
    //     return $this->belongsTo('App\Model\Product', 'id', 'product_id');
    // }
    public function product(){
        return $this->belongsTo('App\Model\Product','product_id','id');
    }
}
?>