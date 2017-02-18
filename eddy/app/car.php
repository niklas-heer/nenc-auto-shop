<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;

/*
*	TODO:
*	Property Fotos ausfüllen
*/

class Car extends Model
{
	//Tabellenname festlegen, kann auch weggelassen werden.
	protected $table = 'cars';
	
	//Diese Attribute dürfen von Formularen submitted werden
	protected $fillable = ['title'];
	
	//verhindert den Fehler: Unknown column 'updated_at'
	public $timestamps = false;
	
    /**
	*	@var string
	*/
	protected $title = NULL;
	
    /**
	*	@var integer
	*/
	protected $imagesId = NULL;
	
    /**
	*
	*	@return string
	*/
	public function getTitle()
	{
		return $this->attributes['title'];
	}


    /**
	*
	*	@param string $title
	*
	*   @return void
	*/
	public function setTitle($title)
	{
		$this->attributes['title'] = $title;
	}

}