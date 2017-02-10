<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Filesystem\Filesystem;

/*
*	TODO:
*	Property Fotos ausfüllen
*/

class Car extends Model
{
	
    /**
	*	@var string
	*/
	protected $titel = NULL;
	
    /**
	*	@var string
	*/
	protected $description = NULL;
	
    /**
	*	@var float
	*/
	protected $price = NULL;
	
    /**
	*	Power in Kilowatts
	*
	*	@var int
	*/
	protected $kw = NULL;
	
    /**
	*	Kilometer
	*
	*	@var int
	*/
	protected $km = NULL;
	
    /**
	*	@var ???
	*/
	protected $fotos = NULL;
	
    /**
	*	@var string
	*/
	protected $color = NULL;
	
    /**
	*	@var string
	*/
	protected $fueltype = NULL;
	/**
	*	@var string
	*/
	protected $model = NULL;

	
    /**
	*
	*	@return string
	*/
	public getTitle()
	{
		return $this->titel;
	}
	
    /**
	*
	*	@param string $title
	*/
	public setTitle($title)
	{
		$this->titel = $title;
	}
		
    /**
	*
	*	@return string
	*/
	public getDescription()
	{
		return $this->description;
	}
	
    /**
	*
	*	@param string $description
	*/
	public setDescription($description)
	{
		$this->description = $description;
	}
	
    /**
	*
	*	@return string
	*/
	public getColor()
	{
		return $this->color;
	}
	
    /**
	*
	*	@param string $color
	*/
	public setColor($color)
	{
		$this->titel = $color;
	}
	

	
    /**
	*
	*	@return int
	*/
	public getKw()
	{
		return $this->kw;
	}
	
    /**
	*
	*	@param int $kw
	*/
	public setKw($kw)
	{
		$this->kw = $kw;
	}
	
    /**
	*
	*	@return int
	*/
	public getPrice()
	{
		return $this->price;
	}
	
    /**
	*
	*	@param int $price
	*/
	public setPrice($price)
	{
		$this->price = $price;
	}
	
    /**
	*
	*	@return int
	*/
	public getKm()
	{
		return $this->km;
	}
	
    /**
	*
	*	@param int $km
	*/
	public setKm($km)
	{
		$this->km = $km;
	}
	
    /**
	*
	*	@return string
	*/
	public getFueltype()
	{
		return $this->km;
	}
	
    /**
	*
	*	@param string $fueltype
	*/
	public setFueltype($fueltype)
	{
		$this->fueltype = $fueltype;
	}
		
    /**
	*
	*	@return string
	*/
	public getModel()
	{
		return $this->model;
	}
	
    /**
	*
	*	@param string $model
	*/
	public setModel($model)
	{
		$this->model = $model;
	}
	
}