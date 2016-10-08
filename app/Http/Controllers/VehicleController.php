<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VehicleController extends Controller
{
    public function addVehicle(){
        return View('vehicle.addVehicle');  // view folder - vehicle folder - addVehicle.blade.php file
    }


    public function retireVehicle(){
        return View('vehicle.retireVehicle');
    }


    public function updateHireRate(){
        return View('vehicle.updateHireRate');
    }
}
