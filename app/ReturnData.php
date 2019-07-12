<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnData extends Model
{
    public static function  APIData($data)
    {
        if($data != null)
        return response()->json(["return"=>true,"data"=>$data]);
       
        else
        return response()->json(["return"=>false,"other"=>"Other error"]);
    }
}
