<?php

/**
 * Student name:    Kirstine Brørup Nielsen
 * Student id:      100527988
 * Date:            18.10.2016
 * Assignment:      EzyHire
 * Version:         Prototype
 * File:            ReportController.php
 */

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
