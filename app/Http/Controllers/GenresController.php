<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function ajax(Request $request)
    {
        if($request->ajax()) {
            return   Genre::all()->jsonSerialize();
        }
        return   abort('403');
    }

}
