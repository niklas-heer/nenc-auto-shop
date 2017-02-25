<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;

class Image extends Model
{  
    //verhindert den Fehler: Unknown column 'updated_at'
    public $timestamps = false;

    //Tabellenname festlegen, kann auch weggelassen werden.
    protected $table = 'cars_images';

    //Diese Attribute dürfen von Formularen submitted werden
    //protected $fillable = ['path'];

    /**
    *	@var string
    */
    protected $path = NULL;

    /**
    *	@var integer
    */
    protected $car_id = NULL;

    /**
    *
    *   @param string $path
    *   @return void
    */
    public function setPath($path)
    {
        $this->attributes['path'] = $path;
    }
    
    /**
    *
    *   @return string
    */
    public function getPath()
    {
        return $this->attributes['path'];
    }

    /**
    *
    *	@return string
    */
    public function setCarId($car_id)
    {
        $this->attributes['car_id'] = $car_id;
    }
    /**
    *
    *	@param string $title
    *
    *   @return void
    */
    public function getCarId()
    {
        return $this->attributes['car_id'];
    }
}
