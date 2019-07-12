<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAllow extends Model
{
    protected $table ="product_allows";

    public $fillable=['productAllowID',
                     'userID',
                     'status',
                     'answerFilePath',
                     'accessibility',
                     'created_at',
                     'updated_at' ];
}
