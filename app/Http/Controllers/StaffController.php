<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class StaffController
 * @package App\Http\Controllers
 * controls staff member related
 */
class StaffController extends Controller
{
    public function registerStaffMember(){
        return View('register');
    }

    public function login(){
        return View('login');
    }

    public function logout(){
        return View('home');
    }
}
