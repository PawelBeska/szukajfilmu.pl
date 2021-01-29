<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\SearchRequest;

class IndexController extends Controller
{
    public function index()
    {

      return view('home.pages.index.index');
    }
    public function help()
    {
        return view('home.pages.help.help');
    }
    public function contact()
    {
        return view('home.pages.contact.contact');
    }
    public function sitemap()
    {
        return response()->view('sitemap', [
            'files' => File::select('name','token')->get(),
        ])->header('Content-Type', 'text/xml');
    }
    public function search(SearchRequest $request)
    {

     //   $responseKeys = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode('6LeVM5wUAAAAAAaeFZp1WQwHubqzE2pKbOo1-NOS') .  '&response=' . urlencode($request->get('token'))),true);
     //  if($responseKeys['success']) {
           if ($request->get('data'))
            return File::where('name', 'LIKE', '%' . $request->get('data') . '%')->select('name', 'url_short', 'quality', 'version')->limit(10)->get();
           else
            return File::select('name', 'url_short', 'quality', 'version')->limit(10)->get();

/* }else
           return abort(401);

*/
    }

}
