<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionMap extends Model
{
    protected $table = "question_maps";

    public $fillable = [
        'questionMapID',
         'questionID',
         'topicID',
         'sectionID',
         'examID',
         'groupID',
         'testID',
         'created_at',
         'updated_at'
    ];
}
