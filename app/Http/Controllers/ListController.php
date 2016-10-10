<?php

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
