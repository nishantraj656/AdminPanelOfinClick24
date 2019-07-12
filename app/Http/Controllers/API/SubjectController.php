<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReturnData;
use App\ImageUpload;
use App\Group;
use App\Subject;

class SubjectController extends Controller
{
    public function save(Request $request)
    {
        $title = $request->title;
        $ID = $request->subjectID; 
        $status = $request->status;
        $description = $request->description;
        $pic = $request->file('pic');

        $data = [
            'subjectName'=>$title,
            'description'=>$description,
            'status'=>$status
            
           ];

           if($pic != null)
           {
              $pic = ImageUpload::saveImage($pic,'subject');
               $data['pic']=$pic;
           }

        if($ID != null)
        {
          $data =  Subject::where('subjectID',$ID)
                    ->update($data);
        }
        else {
          $data =  Subject::create($data);
        }
        
        return  ReturnData::APIData($data);
       
    }

    public function show(Request $request)
    {
        

        $where = $request->where;
        $data = null;

        if($where != null)
        {
           $data = Subject::where($where)->paginate(15);
        }
        else
        {             
            //full data 
            $data =  Subject::paginate(15);
        }

        return ReturnData::APIData($data);
    }

    // private function APIData($data)
    // {
    //     if($data != null)
    //     return response()->json(["return"=>true,"data"=>$data]);
    //    else
    //     return response()->json(["return"=>false,"data"=>$data]);  
    // }
}
