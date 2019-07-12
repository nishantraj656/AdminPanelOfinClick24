<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamValidation;
use App\Exam;
use App\ReturnData;
use App\ImageUpload;

class ExamController extends Controller
{
    public function save(ExamValidation $request)
    {
        $examName = $request->title;
        $examID = $request->examID;
        $status = $request->status;
        $groupID = $request->groupID;
        $pic = $request->file('pic');
        $data = null;
      
       

        $storeData = [
            'examName'=>$examName,
            'status'=>$status,
            'groupID'=>$groupID,
            
        ];

        if($pic != null)
        {
           $pic = ImageUpload::saveImage($pic,'exam');
            $storeData['pic']=$pic;
        }

         // Retrieve the validated input data...
    $validated = $request->validated();
    
    if($validated)
    {
        if($examID != null)
        {
            // Update Method
            echo "Data update ";
            $data = Exam::where('examID',$examID)
            ->update($storeData);

        }
        else
        {
            // New Create 
            // echo "Exam Create ";
            $data = Exam::create($storeData);

        }
    }
    
     
    return ReturnData::APIData($data);
       
    }

    public function show(Request $request)
    {
        $where = $request->where;
        $data = null;

        if($where != null)
        {
           $data = Exam::where($where)->paginate(15);
        }
        else
        {             
            //full data 
            $data =  Exam::paginate(15);
        }

        return ReturnData::APIData($data);
    }

    private function APIData($data)
    {
        if($data != null)
        return response()->json(["return"=>true,"data"=>$data]);
       
        else
        return response()->json(["other"=>"Other error"]);
    }
}
