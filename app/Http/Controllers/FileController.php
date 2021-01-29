<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index($filename,$token)
    {
        if($file = File::where('token',$token)->first())
        {
            $file->update(['views'=>$file->views+1]);
            return view('home.pages.file.file')->with('name',$file->name)->with('url',$file->url_openload?$file->url_openload:$file->url);
        }else{
            return 0;
        }
    }
}
