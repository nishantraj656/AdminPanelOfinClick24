<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function save(Request $request)
    {
        $name = $request->testName;
        $ID = $request->testID;
        $data = null;

        if($ID != null)
        {
            // Update Method
            echo "Data update ";

        }
        else{
            // New Create 
            echo "Exam Create ";
        }

        return $this->APIData($data);
       
    }

    public function show(Request $request)
    {
        $where = $request->where;
        $data = null;

        if($where != null)
        {
            // filter data
            echo "Condition data ";
        }
        else
        {
            // full data 
            echo "full data ";
        }

        return $this->APIData($data);
    }

    private function APIData($data)
    {
        if($data != null)
        return response()->json(["return"=>true,"data"=>$data]);
       else
        return response()->json(["return"=>false,"data"=>$data]);  
    }
}
