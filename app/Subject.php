<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects"; 

    public $fillable = [
        'subjectID',
        'subjectName',
        'status',
        'description',
        'pic',
        'created_at',
        'updated_at'
    ];
}
