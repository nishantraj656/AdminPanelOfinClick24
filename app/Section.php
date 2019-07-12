<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";

    public $fillable = [
        'sectionID',
         'sectionName',
         'description',
         'pic',
         'created_at',
         'updated_at'
    ];
}
