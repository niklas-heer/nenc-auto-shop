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
        dd(request()->all());
    }
}
