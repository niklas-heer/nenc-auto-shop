<?php

namespace App\Http\Controllers;

use App\Image;

class ImageController extends Controller
{
    /**
     * Delete model with specific ID.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Image::find($id)->delete();
        
        return redirect()->back();
    }
}
