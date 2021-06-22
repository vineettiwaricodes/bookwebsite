<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'vender_name',
        'color_name',
        'product_color',
        'description',
        'category',
        'subcategory',
        'brand',
        'author',
        'language',
        'publisher',
        'isbn',
        'binding',
        'publish_date',
        'product_edition',
        'weight',
        'dimension',
        'print_on_demand',
        'tax_class',
        'status',
        'MRP',
        'price',
        'special_price',
        'special_price_start',
        'special_price_to',
        'sku',
        'inventory',
        'stock',
        'basic_image',
        'additional_image',
        'url',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'related_product',
        'up_sells',
        'cross_sells',
        'short_description',
        'product_new_from',
        'product_new_to',
        'discount',
        'selling_price',
    ];

    public function categoryls()
    {      
        return $this->hasone('App\Model\Categories', 'id', 'category');
    }
    public function subcategoryls()
    {      
        return $this->hasone('App\Model\Categories', 'id', 'subcategory');
    }
    public function brandls()
    {      
        return $this->hasone('App\Model\Brand', 'id', 'brand');
    }
     public function optionls()
    {      
        return $this->hasone('App\Model\ProductOption', 'product_id', 'id');
    }
      public function Attributls()
    {      
        return $this->hasone('App\Model\ProductOption', 'product_id', 'id');
    }
    public function rattingdata()
    {      
        return $this->hasmany('App\Model\Review', 'product_id', 'id');
    }
    public function wishlist()
    {
        return $this->hasOne('App\Model\Wishlist','id','product_id');
    }
    
}
?>