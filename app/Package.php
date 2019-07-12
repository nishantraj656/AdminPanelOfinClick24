<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = "packages";

    public $fillable =[
         'packageID',
          'price',
          'packageName',
          'productMapID',
          'expDate',
          'description',
          'pic',
          'created_at',
          'updated_at' 
    ];
}
