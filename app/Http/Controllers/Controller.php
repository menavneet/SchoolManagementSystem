<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function admin(){
        return view('admin');
    }

    public  function resizeImage($filename,$h,$target=null){
        $filename = storage_path('app/').$filename;



        // Get new dimensions
        list($width, $height) = getimagesize($filename);
        $new_height = $h;
        $new_width = $width/$height * $h;

        // Resample
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // Output
        if($target==null){
            imagejpeg($image_p,$filename,100);
        }
        else{
            imagejpeg($image_p,$target,100);
        }

    }

    public function deleteUser(User $user){
        $user->delete();
        return back();
    }

    public function classmapping(){
        $classes=\App\SchoolClass::all();
        $sections=\App\SchoolSection::all();
        $map=array();
        foreach( DB::select('select class_id,section_id from class_section') as $row)
        {
            $map[$row->class_id.'_'.$row->section_id]=$row->class_id.'_'.$row->section_id;
        }
        return view('mapping.class',compact('classes','sections','map'));
    }
    public function classmappingchange(Request $request){
        $a=array();
        DB::delete('delete from class_section');
        foreach($request->classmap as $map){
            $temp=explode('_',$map);
            $b=array();
            $b['class_id']=$temp[0];
            $b['section_id']=$temp[1];
            array_push($a,$b);
        }
        DB::table('class_section')->insert($a);
        return back();
    }

    public function subjectmapping(){
        $classes=\App\SchoolClass::all();
        $subjects=\App\SchoolSubject::all();
        $map=array();
        foreach( DB::select('select class_id,subject_id from class_subject') as $row)
        {
            $map[$row->class_id.'_'.$row->subject_id]=$row->class_id.'_'.$row->subject_id;
        }
        return view('mapping.subject',compact('classes','subjects','map'));
    }

    public function subjectmappingchange(Request $request){
        $a=array();
        DB::delete('delete from class_subject');
        foreach($request->classmap as $map){
            $temp=explode('_',$map);
            $b=array();
            $b['class_id']=$temp[0];
            $b['subject_id']=$temp[1];
            array_push($a,$b);
        }
        DB::table('class_subject')->insert($a);
        return back();
    }

}
