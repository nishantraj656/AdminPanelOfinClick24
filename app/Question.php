<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table ="questions";

    public $fillable =['questionID',
                       'question',
                       'option',
                       'answer',
					   'subject',
					   'topic',
					   'level',
                       'type',
                       'Discription',
                       'created_at',
                       'updated_at'
                    ];
}
