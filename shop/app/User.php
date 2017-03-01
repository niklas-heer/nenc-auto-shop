<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract  
{
    use Authenticatable, CanResetPassword, Notifiable;
    
    protected $fillable = ['name', 'email', 'password', 'created_at', 'updated_at'];
    protected $hidden = ['remember_token'];
}
