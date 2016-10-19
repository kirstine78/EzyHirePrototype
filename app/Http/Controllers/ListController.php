<?php

/**
 * Student name:    Kirstine Brørup Nielsen
 * Student id:      100527988
 * Date:            18.10.2016
 * Assignment:      EzyHire
 * Version:         Prototype
 * File:            ListController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListController extends Controller
{
    public function listBookingsByCustomer(){
        return View('list.listBookingsByCustomer');
    }

    public function listDamagesByCustomer(){
        return View('list.listDamagesByCustomer');
    }
}
