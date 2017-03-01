<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Input;
use Redirect;
use Session;


use App\Car;
use App\Image;

class CarController extends Controller
{
    public $imageCounter = 1;
        
    public function create()
    {
        return view('cars.create');
    }
    
    public function show()
    {
        return view('cars.index');
    }
    
    /**
     * Display model with specific ID.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showById($id)
    {
        $allImages = Image::all();
        $car = Car::find($id);
        
        return view('cars.show')
                ->with("car", $car)
                ->with("allImages", $allImages);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $title
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
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function filter()
    {
        $this->validate(request(), [
            'maxPrice'  => 'required|numeric',
            'brand'     => 'required|regex:/^[\pL\s\-]+$/u',    //only allows letters, hyphens and spaces explicitly
            'model'     => 'required|alpha_dash',
        ]);
        
        $errors = false;
        $logMessage = '';
        
        $checkBrands = Car::where('brand', '=', request('brand'))->get(); 
        $checkModels = Car::where('model', '=', request('model'))->get(); 
        $checkPrice  = Car::where('price', '<', request('maxPrice'))->get();
        
        if (count($checkBrands)==0) {
            $logMessage .= '<span class="errorLog">Es wurde kein Fahrzeug mit der Marke <b>\''. request('brand') . '\'</b> gefunden.</span><br>';
            $errors = true;
        } else {
            if (count($checkBrands)==1) {
                $logMessage .= '<span>Es wurde <b>'. count($checkBrands) .'</b> Fahrzeug der Marke <b>\''. request('brand') . '\'</b> gefunden.</span><br>';
            } else {
                $logMessage .= '<span>Es wurden <b>'. count($checkBrands) .'</b> Fahrzeuge der Marke <b>\''. request('brand') . '\'</b> gefunden.</span><br>';
            }
        }
                
        if (count($checkModels)==0) {
            $logMessage .= '<span class="errorLog">Es wurde kein Fahrzeug mit dem Modell <b>\''. request('model') . '\'</b> gefunden.</span><br>';
            $errors = true;
        } else {
            if (count($checkModels)==1) {
                $logMessage .= '<span>Es wurde <b>'. count($checkModels) .'</b> Fahrzeug mit dem Modell <b>\''. request('model') . '\'</b> gefunden.</span><br>';
            } else {
                $logMessage .= '<span>Es wurden <b>'. count($checkModels) .'</b> Fahrzeuge mit dem Modell <b>\''. request('model') . '\'</b> gefunden.</span><br>';
            }
        }

        if (count($checkPrice)==0) {
            $logMessage .= '<span class="errorLog">Es wurde kein Fahrzeug gefunden das unter <b>'. request('maxPrice') .' €</b> kostet.</span><br>';
            $errors = true;
        } else {
            if (count($checkPrice)==1) {
                $logMessage .= '<span>Es wurde <b>'. count($checkPrice) .'</b> Fahrzeug gefunden die für unter <b>'. request('maxPrice') .' €</b> angeboten werden.</span><br>';
            } else {
                $logMessage .= '<span>Es wurden <b>'. count($checkPrice) .'</b> Fahrzeuge gefunden die für unter <b>'. request('maxPrice') .' €</b> angeboten werden.</span><br>';
            }
        }
        
        $allImages = Image::all();

        $matchingCars = Car::where('brand', '=', request('brand'))
                           ->where('model', '=', request('model'))
                           ->where('price', '<', request('maxPrice'))->get();
        
        
        if ($errors || count($matchingCars)==0) {
            
            //Mindestens ein Suchkriterium hat übereingestimmt
            if (count($checkBrands)>0 || count($checkModels)>0 || count($checkPrice)>0) {
                
                //Der Gesamtfilter hat kein Match gefunden, ähnliche Ergebnisse returnen:
                $matchingCars = Car::where('brand', '=', request('brand'))
                                   ->orwhere('model', '=', request('model'))
                                   ->orwhere('price', '<', request('maxPrice'))->get();
                
                return view('cars/showAll')->with("allCars", $matchingCars)
                                           ->with("allImages", $allImages)
                                           ->with("errMessage", $logMessage);
                
            //Kein Suchkriterium hat übereingestimmt
            } else {
                return view('showErrors')->with("logMessage", $logMessage);
            }

        } else {

            return view('cars/showAll')->with("allCars", $matchingCars)
                                       ->with("allImages", $allImages)
                                       ->with("logMessage", $logMessage);
        }

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
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
            'title' => 'required|max:80',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'brand' => 'required|regex:/^[\pL\s\-]+$/u',    //only allows letters, hyphens and spaces explicitly
            'model' => 'required|regex:/^[\pL\s\-]+$/u',    //only allows letters, hyphens and spaces explicitly
        ]);

        $car = new Car();

        $car->title = request('title');
        $car->description = request('description');
        $car->price = request('price');
        $car->brand = request('brand');
        $car->model = request('model');

        $car->save();

        $allCars = Car::all();
        $allImages = $request->file('image');

        if (!empty($allImages)):
            foreach ($allImages as $image):
                $image = $this->upload($image, $car->id);
            endforeach;
        endif;

        return redirect('cars/showAll')
            ->with("allCars", $allCars)
            ->with("images", $allImages);
    }
    
    
}
