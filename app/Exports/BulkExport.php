<?php

namespace App\Exports;

use App\Bulk;
use App\Model\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BulkExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }

    public function headings(): array{
        return [
            'id',
            'name',
            'vender_name',
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
            'quantity',
            'inventory',
            'stock',
            'basic_image',
            'additional_image',
            'url',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'related_product',
            'shipping_charges',
            'delivery_days',
            'up_sells',
            'cross_sells',
            'short_description',
            'product_new_from',
            'product_new_to',
            'discount',
            'selling_price',
            'created_at',
            'updated_at',
            'deleted_at'

        ];
    }
}
