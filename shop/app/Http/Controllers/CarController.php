<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function show()
    {
        return view('cars.index');
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store()
    {
        $car = new Car();

        $car->title = request('title');
        $car->description = request('description');
        $car->price = request('price');
        $car->kw = request('kw');
        $car->km = request('km');
        $car->fueltype = request('fueltype');
        $car->color = request('color');
        $car->model = request('model');

        $car->save();



//        Car::creating([
//            "titel" => request('titel'),
//            "description" => request('description'),
//            "price" => request('price'),
//            "kw" => request('kw'),
//            "km" => request('km'),
//            "color" => request('color'),
//            "model" => request('model')
//        ]);

        return view('/');
    }
}
