<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
     /**
     * File upload function
     * @param file 
     * @param path
     * $this->saveImage($path,'sub');
     */
    static function saveImage($request,$path)
    {
        $destinationPath ='uplaod/'.$path; // upload path
        $profileImage = date('YmdHis') . "." . $request->getClientOriginalExtension();
        $request->move($destinationPath, $profileImage);
        return '/'.$destinationPath.'/'.$profileImage;        
    }
}
