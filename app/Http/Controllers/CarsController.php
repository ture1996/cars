<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index(){
        $cars = Car::published();

        return view('cars.cars' , compact('cars'));
    }

    public function show($id){
        $car = Car::find($id);
        
        return view('cars.car', compact('car'));
    }

}

