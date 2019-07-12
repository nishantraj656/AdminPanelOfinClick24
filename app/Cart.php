<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table="carts";

    public $fillable = ['cartID',
     'price',
     'paid',
     'userID',
     'productType',
     'promotionalID',
     'created_at',
     'updated_at' ];
}
