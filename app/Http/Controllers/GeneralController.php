<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class GeneralController
 * @package App\Http\Controllers
 * Controller for pages that can be viewed without being logged in
 */
class GeneralController extends Controller
{
    // show home page
    public function index() {
        return View('home');
    }

    // show suburbs in company
    public function getSuburbs(){
        return View('suburb');
    }

    // show brands in company
    public function getBrands(){
        return View('brand');
    }
}
