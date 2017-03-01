<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
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
