<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArchiveController extends Controller
{
    public function index(){
        return View('archive');
    }
}
