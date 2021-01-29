<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use nSolutions\Filmweb;

class SeriesController extends Controller
{
    public function index()
    {
        return view('home.pages.series.series');
    }
    public function ajax(Request $request)
    {
        if($request->ajax()) {
$ar=[];
            $filmweb = Filmweb::instance();
            foreach (File::select('fb_id')->limit(10)->get() as $film)
            {
                array_push($ar,$filmweb->getFilmInfoFull($film->fb_id)->execute());
            }
        return   $ar;



        }
        return   abort('403');
    }
}
