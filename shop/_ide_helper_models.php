<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Car
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property float $price
 * @property string $brand
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereBrand($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereModel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereUpdatedAt($value)
 */
	class Car extends \Eloquent {}
}

namespace App{
/**
 * App\Image
 *
 * @property int $id
 * @property string $path
 * @property int $car_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Image whereCarId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Image whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Image wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Image whereUpdatedAt($value)
 */
	class Image extends \Eloquent {}
}

