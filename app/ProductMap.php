<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMap extends Model
{
    protected $table= 'product_maps';

    public $fillable=[
    'productMapID',
     'productInfoID',
     'price',
     'expiredate',
     'status',
     'QuestionMapID',
     'created_at',
     'updated_at'
    ];
}
