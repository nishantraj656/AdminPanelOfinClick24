<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

    public $fillable = [
        'testID',
        'testName',
        'status',
        'description',
        'pic',
        'created_at',
        'updated_at'
    ];
}
