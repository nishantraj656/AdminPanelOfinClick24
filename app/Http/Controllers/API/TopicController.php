<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\Topic;
use App\ReturnData;

class TopicController extends Controller
{
    public function save(Request $request)
    {
        $title = $request->title;
        $ID = $request->topicID; 
        $status = $request->status;
        $description = $request->description;
        $subjectID = $request->subjectID;

        $pic = $request->file('pic');
		
		if($status == null)
		{
			$status = 1;
		}
		
        $data = [
            'topicName'=>$title,
            'description'=>$description,
            'status'=>$status,
            'subjectID'=>$subjectID
            
           ];

           if($pic != null)
           {
              $pic = ImageUpload::saveImage($pic,'subject');
               $data['pic']=$pic;
           }

        if($ID != null)
        {
          $data = Topic::where('topicID',$ID)
                    ->update($data);
        }
        else {
          $data =  Topic::create($data);
        }
        
        return  ReturnData::APIData($data);
       
    }

    public function show(Request $request)
    {
        

        $where = array();
        $data = null;
        $subject = $request->subjectID;
        
        if($subject != null)
            $where['subjectID']= $subject;


        if($where != null && count($where) != 0)
        {
           $data = Topic::where($where)->get();
        }
        else
        {             
            //full data 
            $data =  Topic::paginate(15);
        }

        return ReturnData::APIData($data);
    }
}
