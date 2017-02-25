<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use Session;
use Storage;

use App\Car;
use App\Image;

class CarController extends Controller
{
    public $imageCounter = 1;
    
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
     * Filter
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function filter()
    {
        $this->validate(request(), [
            'price' => 'required|numeric',
            'brand' => 'required|alpha',
            'model' => 'required|alpha_dash',
        ]);
        
        if ($this->validate->fails()) {
            
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('/');
          
        } else {
            echo $this->request->price;
            die;

            $matchingCars = Car::where('model', '=', $this->request->model)->get();
            $allImages    = Image::all();

            return view('cars.showAll')
                    ->with("allCars", $matchingCars)
                    ->with("allImages", $allImages);
        }
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

    /**
     * 
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                
        $this->validate(request(), [
            'title'         => 'required|max:80',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'brand'         => 'required|alpha',
            'model'         => 'required|alpha_dash'
        ]);

        $car = new Car();

        $car->title         = request('title');
        $car->description   = request('description');
        $car->price         = request('price');
        $car->brand         = request('brand');
        $car->model         = request('model');

        $car->save();

        $allCars    = Car::all();
        $allImages  = $request->file('image');       
        
        if(!empty($allImages)):
            foreach($allImages as $image):
                $image = $this->upload($image, $car->id);
            endforeach;
        endif;
       
        return redirect('cars/showAll')
                ->with("allCars", $allCars)
                ->with("images", $allImages);
    }
    
    /**
     * 
     * @param integer $car_id
     * @return Image
     */
    public function upload($image, $car_id)
    {
        // checking file is valid.
        if ($image->isValid()) {

            $uploadPath = 'uploads'; 
            // getting image extension
            $extension = $image->getClientOriginalExtension();
            $fileName = date("Ymdis").$this->imageCounter++.'.'.$extension;
            // uploading file to given path
            $image->move($uploadPath, $fileName);

            $ImageObj = new Image();
            $ImageObj->setCarId($car_id);   
            $ImageObj->setPath( $uploadPath . "/" . $fileName );
            $ImageObj->save();

            Session::flash('success', 'Upload successfully'); 

            return $ImageObj;

        } else {

          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('/');
        }
    }
}
