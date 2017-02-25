<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;

class Image extends Model
{
    /**
     * Prevents error: Unknown column 'updated_at'
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Set the table name.
     *
     * @var string
     */
    protected $table = 'cars_images';

    // Allowed fields from forms
    // protected $guarded = ['ic'];

    /**
     * @var string
     */
    protected $path = NULL;

    /**
     * @var integer
     */
    protected $car_id = NULL;

    /**
     * Sets the path.
     *
     * @param string $path
     * @return void
     */
    public function setPath($path)
    {
        $this->attributes['path'] = $path;
    }

    /**
     * Gets the path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->attributes['path'];
    }

    /**
     * Sets the car id.
     *
     * @param int $car_id
     * @return void
     */
    public function setCarId($car_id)
    {
        $this->attributes['car_id'] = $car_id;
    }

    /**
     * Gets the car id.
     *
     * @return int
     */
    public function getCarId()
    {
        return $this->attributes['car_id'];
    }
}
