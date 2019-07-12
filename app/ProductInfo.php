<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    protected $table="product_infos";

    public $fillable =[
        'ProductInfoID',
         'groupID',
         'productName',
         'testID',
         'sectionID',
         'topicID',
         'examID',
         'description',
         'subjectID',
         'pic',
         'price',
         'type',
         'created_at',
         'updated_at'
    ];

}
