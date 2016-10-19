<?php

/**
 * Student name:    Kirstine Brørup Nielsen
 * Student id:      100527988
 * Date:            18.10.2016
 * Assignment:      EzyHire
 * Version:         Prototype
 * File:            ArchiveController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArchiveController extends Controller
{
    public function index(){
        return View('archive');
    }
}
