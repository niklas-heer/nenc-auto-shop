<?php namespace App\Http\Controllers;

use Input;
use Validator;
use Redirect;
use Request;
use Session;

class CarController extends Controller
{
	/**
	*
	*	@return void
	*/
	public function uploadAction()
	{
		// getting all of the post data
		$file = array('image' => Input::file('image'));

		// setting up rules (mimes:jpeg,bmp,png and for max size max:10000)
		$rules = array('image' => 'required',); 

		// doing the validation, passing post data, rules and the messages
		$validator = Validator::make($file, $rules);

		if ($validator->fails()) {
		// send back to the page with the input data and errors
		return Redirect::to('upload')->withInput()->withErrors($validator);

		} else {
		  
			// checking file is valid.
			if (Input::file('image')->isValid()) {

				// upload path
				$destinationPath = 'uploads';

				// getting image extension
				$extension = Input::file('image')->getClientOriginalExtension();

				// renameing image
				$fileName = rand(11111,99999).'.'.$extension; 

				// uploading file to given path
				Input::file('image')->move($destinationPath, $fileName); 

				// sending back with message
				Session::flash('success', 'Upload successfully'); 
				return Redirect::to('upload');
				
			} else {
				
				// sending back with error message.
				Session::flash('error', 'uploaded file is not valid');
				return Redirect::to('upload');
			}
		}
	}
}