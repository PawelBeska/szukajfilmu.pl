<?php

namespace App\Http\Controllers;

use App\File;
use App\Movie;
use Illuminate\Http\Request;
use nSolutions\Filmweb;

class MoviesController extends Controller
{
    public function index()
    {
        return view('home.pages.movies.movies');
    }
    public function ajax(Request $request)
    {
        if($request->ajax()) {
            $v =  Movie::latest()->paginate(12);
            $s = $v->jsonSerialize();
            array_push($s, (string)$v->render('home.elements.movies.paginator'));
            return   $s;
        }
        return   abort('403');
    }

}
