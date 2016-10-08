<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReportController extends Controller
{
    public function showDamagesReport(){
        return View('report.showDamagesReport');
    }


    public function showFaultsReport(){
        return View('report.showFaultsReport');
    }
}
