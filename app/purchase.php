<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    public $timestamps = false;

    protected $table = "purchase";
    protected $primarykey = "id_purchase";
    protected $foreignkey = "id_login";
    // protected $fillable = ['id_login'];
}
