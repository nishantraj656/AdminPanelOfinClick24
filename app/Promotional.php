<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotional extends Model
{
    protected $table = 'promotionals';

    public $fillable =[
        'PromotionalID',
         'PromotionalCode',
         'discount',
         'expDate',
         'usedTimes',
         'allowTo',
         'created_at',
         'updated_at'
    ];
}
