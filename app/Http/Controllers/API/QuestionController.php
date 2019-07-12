<?php

namespace App\Http\Controllers\API;

use App\ReturnData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\Question;
use App\QuestionMap;

class QuestionController extends Controller
{
    public function save(Request $request)
    {
       /*** $title = $request->title;
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
        }*/
		
		$ID = $request->questionID;
		
		$data = array(); //$request->totalOption;
		$totalOption = $request->totalOption;
		
		$option= array();
		$answerCount =0;
		for($i = 0; $totalOption> $i; $i++)
		{
			$text = "text_".$i;
			$as ="isAnswer_".$i;
			$p = "pic_".$i;
			
			
			$temp['text'] =	$request->$text;
			$temp['isAnswer'] =	$request->$as;	
			
			$pic = $request->$p;
			if($pic != null && $pic != 0)
           {
			  
              $pic = ImageUpload::saveImage($pic,'discription');
               $temp['pic']=$pic;
           }
		   echo $temp['isAnswer'];
		   if($temp['isAnswer'] ==='true' || $temp['isAnswer'] === true)
		   {
			   
			   $answerCount++;
		   }
			array_push($option,$temp);
		}
		
		$question=array();
		$question['text'] = $request->question;
		$questionPic = $request->questionPic;
		if($questionPic != null)
           {
              $questionPic = ImageUpload::saveImage($questionPic,'question');
               $question['pic']=$questionPic;
           }
		
		
		$discription=array();
		$discription['text']= $request->discription;
		
		$pic = $request->discriptionPic;
		if($pic != null)
           {
              $pic = ImageUpload::saveImage($pic,'discription');
               $discription['pic']=$pic;
           }
		
		$topic = $request->topic;
		$subject = $request->subject;
		$level = $request->level;	
		
		$type='';
		echo $answerCount;
		if($answerCount == 1)
			$type = 'Objective';
		else if($answerCount >1)
			$type = 'Multiple';
		var_dump($question);
		
		$data =[
                       'question'=>json_encode($question),
                       'option'=>json_encode($option),
					   'subject'=>$subject,
					   'level'=>$level,
					   'topic'=>$topic,
					   'type'=>$type,
					   'Discription'=>json_encode($discription)
                    ];
					
		if($ID != null)
		{
			$data = Question::where('questionID',$ID)
			->update($data);
			
		}
		else{		
			$data = Question::create($data);
			$this->test($request,$data['id']);
		}
		/***
		array_push($data,$question);
		array_push($data,$option);
		array_push($data,$discription);
		array_push($data,$topic); //3
		array_push($data,$subject);//4
		array_push($data,$level);*/
		
		
        
       return  ReturnData::APIData($data);
       
    }
	
	public function show(Request $request)
	{
		$data=array();
		
		$data = Question::paginate(15);
		
		return ReturnData::APIData($data);
	}

	public function test(Request $request, $data)
	{

		$datas = [
			
			 'questionID'=>$data,
			 
			
			 'examID'=>1,
			 'groupID'=>1,
			 'testID'=>1
			
		];

		$data =QuestionMap::create($datas);

		//return ReturnData::APIData($data);
	}

}
