<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LogoutController extends Controller
{
    public function index(){
        return View('home');
    }
}
