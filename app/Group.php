<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
   protected $table ='groups';

   public $fillable = [
    'groupID',
    'groupName',
    'description',
    'pic',
    'created_at',
    'updated_at'
   ];
}
