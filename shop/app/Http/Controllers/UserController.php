<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Input;
use Redirect;


use App\Car;
use App\Image;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showAll()
    {
        $allCars = Car::where('user_id', '=', Auth()->user()->id)->get();
        $allImages = Image::all();

        return view('show.showAll')
            ->with("allCars", $allCars)
            ->with("allImages", $allImages);
    }
    
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showAccount()
    {
        return view('models.user.showAccount');
    }
    
    
    
}
