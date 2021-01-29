<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use nSolutions\Filmweb;

class MovieController extends Controller
{
    public function movie($title,$id,Request $request)
    {
        if($request->ajax())
        {
            if(Movie::where('id',$id)->count())
            {

                return view('home.elements.movie.movie')->with('movie',Filmweb::instance()->getFilmInfoFull(Movie::where('id',$id)->first()->fb_id)->execute());
            }else{
                return \Exception::class;
            }
        }else{
            return view('home.pages.movie.movie')->with('movie',Filmweb::instance()->getFilmInfoFull(Movie::where('id',$id)->first()->fb_id)->execute());
        }
    }
    public function iframe($title,$id,Request $request)
    {
           $responseKeys = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode('6LcjfK8UAAAAAGsp-KAGLbwt1RZsitxDGAGxsxsr') .  '&response=' . urlencode($request->get('token'))),true);
          if($responseKeys['success']) {
             $movie = Movie::select('url','url_openload')->find($id);
             return $movie->url_openload??$movie->url;
          }else abort(401);
    }
}
