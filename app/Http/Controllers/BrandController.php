<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BrandController extends Controller
{
    public function index(){
        return View('brand');
    }
}
