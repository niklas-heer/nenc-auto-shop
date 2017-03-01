<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    
    protected $fillable = ['name', 'email', 'password', 'created_at', 'updated_at'];
    protected $hidden = ['remember_token'];
}
