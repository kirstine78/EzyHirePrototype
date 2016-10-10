<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function index(){
        return View('customer.index');
    }

    public function addCustomer(){
        return View('customer.addCustomer');
    }


    public function updateCustomer(){
        return View('customer.updateCustomer');
    }


    public function deleteCustomer(){
        return View('customer.deleteCustomer');
    }


    public function listBookingsByCustomer(){
        return View('customer.listBookingsByCustomer');
    }


    public function listDamageByCustomer(){
        return View('customer.listDamageByCustomer');
    }
}
