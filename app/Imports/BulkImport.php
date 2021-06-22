<?php

namespace App\Imports;

use App\Model\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'  =>  $row['name'],
            'vender_name'   =>  $row['vender_name'],
            'color_name'   =>  $row['color_name'],
            'product_color'   =>  $row['product_color'],
            'description'   =>  $row['description'],
            'category'   =>  $row['category'],
            'subcategory'   =>  $row['subcategory'],
            'brand'   =>  $row['brand'],
            'author'   =>  $row['author'],
            'description'   =>  $row['description'],
            'language'  =>$row['language'],
            'publisher'   =>  $row['publisher'],
            'isbn'   =>  $row['isbn'],
            'binding'   =>  $row['binding'],
            'publish_date'   =>  $row['publish_date'],
            'product_edition'   =>  $row['product_edition'],
            'weight'   =>  $row['weight'],
            'dimension'   =>  $row['dimension'],
            'tax_class'   =>  $row['tax_class'],
            'status'   =>  $row['status'],
            // 'MRP'   =>  $row['MRP'],
            'price'   =>  $row['price'],
            'special_price'   =>  $row['special_price'],
            'special_price_start'   =>  $row['special_price_start'],
            'special_price_to'   =>  $row['special_price_to'],
            'sku'   =>  $row['sku'],
            'inventory'   =>  $row['inventory'],
            'stock'   =>  $row['stock'],
            'basic_image'   =>  $row['basic_image'],
            'additional_image'   =>  $row['additional_image'],
            'url'   =>  $row['url'],
            'meta_title'   =>  $row['meta_title'],
            'meta_keyword'   =>  $row['meta_keyword'],
            'meta_description'   =>  $row['meta_description'],
            'related_product'   =>  $row['related_product'],
            'up_sells'   =>  $row['up_sells'],
            'cross_sells'   =>  $row['cross_sells'],
            'short_description'   =>  $row['short_description'],
            'product_new_from'   =>  $row['product_new_from'],
            'product_new_to'   =>  $row['product_new_to'],
            'discount'   =>  $row['discount'],
            'selling_price'   =>  $row['selling_price'],


        ]);
    }
}
