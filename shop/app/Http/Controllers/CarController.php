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
            'brand'     => 'required|alpha_dash',
            'model'     => 'required|alpha_dash',
        ]);
        
        $errors = false;
        $logMessage = '';
        
        $checkBrands = Car::where('brand', '=', request('brand'))->get(); 
        $checkModels = Car::where('model', '=', request('model'))->get(); 
        $checkPrice  = Car::where('price', '<', request('maxPrice'))->get(); 
        
        if (count($checkBrands)==0) {
            $logMessage .= 'Es wurde kein Auto mit der Marke <b>\''. request('brand') . '\'</b> gefunden.<br>';
            $errors = true;
        } else {
            $logMessage .= 'Es wurden <b>'. count($checkBrands) .'</b> Autos der Marke <b>\''. request('brand') . '\'</b> gefunden.<br>';
        }
        
        if (count($checkModels)==0) {
            $logMessage .= 'Es wurde kein Auto mit dem Modell <b>\''. request('model') . '\'</b> gefunden.<br>';
            $errors = true;
        } else {
            $logMessage .= 'Es wurden <b>'. count($checkModels) .'</b> Autos mit dem Modell <b>\''. request('model') . '\'</b> gefunden.<br>';
        }

        if (count($checkPrice)==0) {
            $logMessage .= 'Es wurde kein Auto gefunden das unter <b>'. request('maxPrice') .' €</b> kostet.<br>';
            $errors = true;
        } else {
            $logMessage .= 'Es wurden <b>'. count($checkPrice) .'</b> Autos gefunden die unter <b>'. request('maxPrice') .' €</b> kosten.<br>';
        }
        
        if ($errors) {
            return view('showErrors')->with("logMessage", $logMessage);
        } else {
            $allImages = Image::all();
                        
            $matchingCars = Car::where('brand', '=', request('brand'))
                               ->where('model', '=', request('model'))
                               ->where('price', '<', request('maxPrice'))->get();
            
            return view('cars/showAll')
                    ->with("allCars", $matchingCars)
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
            'brand' => 'required|alpha',
            'model' => 'required|alpha_dash'
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

    /**
     * Upload an image for a given car.
     *
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @param $image
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
            $fileName = date("Ymdis") . $this->imageCounter++ . '.' . $extension;
            // uploading file to given path
            $image->move($uploadPath, $fileName);

            $ImageObj = new Image();
            $ImageObj->setCarId($car_id);
            $ImageObj->setPath($uploadPath . "/" . $fileName);
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
