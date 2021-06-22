<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publisher';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image'
    ];
}
