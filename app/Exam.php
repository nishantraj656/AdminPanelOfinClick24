<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = "exams";

    public $fillable = [
        'examID',
        'examName',
        'status',
        'groupID',
        'description',
        'pic',
        'created_at',
        'updated_at'
    ];
}
