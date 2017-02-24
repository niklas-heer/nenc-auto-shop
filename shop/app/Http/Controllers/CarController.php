<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Image;

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
        $this->validate(request(), [
            'title' => 'required|max:80',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'brand' => 'required|alpha',
            'model' => 'required|alpha_num'
        ]);

        $car = new Car();

        $car->title = request('title');
        $car->description = request('description');
        $car->price = request('price');
        $car->brand = request('brand');
        $car->model = request('model');

        $car->save();

        return view('/');
    }
    
    public function upload($carId)
    {
      // getting all of the post data
      $file = array('image' => Input::file('image'));
      
      // setting up rules
      $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
      
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('upload')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if (Input::file('image')->isValid()) {
            
            $uploadPath = 'uploads'; 
            // getting image extension
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date("Ymdis").'.'.$extension;
            // uploading file to given path
            Input::file('image')->move($uploadPath, $fileName);
            
            $image = new Image();
            $image->setCarId($carId);   
            $image->setPath( $uploadPath . "/" . $fileName );
            $image->save();
                        
            return $image;
        }
      }
    }
}
