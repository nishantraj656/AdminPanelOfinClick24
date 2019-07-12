<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = "topics";

    public $fillable =['topicID',
                       'topicName',
                       'subjectID',
                       'status',
                       'description',
                       'pic',
                       'created_at',
                       'updated_at'];
}
