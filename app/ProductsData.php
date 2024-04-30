<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsData extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 'email'
    ];
public $timestamps = false;



    //
}
