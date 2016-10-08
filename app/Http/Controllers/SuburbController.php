<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SuburbController extends Controller
{
    public function index(){
        return View('suburb');
    }
}
