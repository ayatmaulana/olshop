<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps = false;

    protected $table = "product";
    protected $primarykey = "id_product";
    protected $fillable = ['name_product','price','type_item'];
}
