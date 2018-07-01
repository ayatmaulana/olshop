<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;

    protected $table = "users";
    protected $primarykey = 'id_login';
    protected $hidden = ['password'];
    protected $fillable = ['email','password'];
}
