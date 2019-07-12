<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReturnData;
use App\Group;
use App\ImageUpload;

class GroupController extends Controller
{
    public function save(Request $request)
    {
        $title = $request->title;
        $groupID = $request->groupID;
        $pic = $request->file('pic');
        $description = $request->description;
        $status = $request->status;

        $data = [
                    'groupName'=>$title,
                    'description'=>$description,
                    'status'=>$status,           
                 ];

           if($pic != null)
           {
              $pic = ImageUpload::saveImage($pic,'exam');
               $data['pic']=$pic;
           }

        if($groupID != null)
        {
          $data =  Group::where('groupID',$groupID)
                    ->update($data);
        }
        else 
        {
          $data =  Group::create($data);
        }
        
        return  ReturnData::APIData($data);

    }

    public function show(Request $request)
    {
        $where = $request->where;
        $data = null;

        if($where != null)
        {
            // filter data
           $data = Group::where($where)->paginate(2);
        }
        else
            {             
                //full data 
             $data =  Group::paginate(15);
            }

        return ReturnData::APIData($data);
    }
}
