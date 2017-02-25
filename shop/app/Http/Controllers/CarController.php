<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use Session;

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
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showById($id)
    {
        $car = Car::find($id);
        return view('car.show')->with("car", $car);
    }
	
    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function showByTitle($title)
    {
        $car = Car::where('title', '=', $title)->get();

        return view('car.showByTitle')->with("car", $car);
    }
	
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $allCars = Car::all();
        $allImages = Image::all();

        return view('cars.showAll')
                ->with("allCars", $allCars)
                ->with("allImages", $allImages);
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|max:80',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'brand' => 'required|alpha',
            'model' => 'required|alpha_dash',
            'image' => 'required|image|dimensions:min_width=100,min_height=200'
        ]);

        $car = new Car();

        $car->title = request('title');
        $car->description = request('description');
        $car->price = request('price');
        $car->brand = request('brand');
        $car->model = request('model');

        $car->save();

        $allCars = Car::all();
        $image = $this->upload($car->id);
       
        return redirect('showAll');
    }
        
    public function upload($car_id)
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
        
      } else {
          
        // checking file is valid.
        if (Input::file('image')->isValid()) {
            
            $uploadPath = 'uploads'; 
            // getting image extension
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date("Ymdis").'.'.$extension;
            // uploading file to given path
            Input::file('image')->move($uploadPath, $fileName);
            
            $image = new Image();
            $image->setCarId($car_id);   
            $image->setPath( $uploadPath . "/" . $fileName );
            $image->save();
            
            Session::flash('success', 'Upload successfully'); 
            
            return $image;
            
        } else {
            
          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('/');
        }
      }
    }
}
