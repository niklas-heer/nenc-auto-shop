<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;
use App\Http\Requests;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Session;

class CarController extends Controller
{
	
    /**
     * Display all created objects
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {		
		$car = new Car();
				
		$car->setTitle($request->title);
		$car->save();

		$image = $this->upload($car->id);
		
		//dd($image);
		$allCars = Car::all();
		
		if ($image !== null) {
			$images = $image::all();
			
			return redirect('showAll')
				->with("allCars", $allCars)
				->with("images", $images);
		}
		else {
			return redirect('showAll')
				->with("allCars", $allCars);
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
		
		return view('car.showAll')->with("allCars", $allCars)
								  ->with("allImages", $allImages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
