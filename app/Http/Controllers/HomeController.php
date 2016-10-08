<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(Request $request){

//        $isLoggedIn = false;
        $isLoggedIn = $request->input('isLoggedIn');

        // use php compact function; take each key and try to find a variable with that same name
        return View('home', compact('isLoggedIn'));
    }
}
