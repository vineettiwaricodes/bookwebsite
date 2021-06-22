<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image'
    ];

    public function author(){
        return $this->hasmany('App\Model\Product', 'author_id', 'id');
    }
}
