<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function index()
{
    return view('home.pages.login.login');
}
    public function login(Request $request)
    {
        $request ->validate([
            'login' => 'required|string',
            'password' => 'required|string'
        ]);
        $message = new MessageBag();
        $input = $request->all();
        if (Auth::attempt(['login' => $input['login'], 'password' => $input['password']])) {
            $message->add('success', "Pomyślnie zalogowano!");
            return $message->jsonSerialize();
        }else{
            $message->add('error', "Zły email lub hasło!");
            return $message->jsonSerialize();
        }
    }
}
