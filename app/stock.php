<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    public $timestamps = false;

    protected $table = "stock";
    protected $primarykey = "id_stock";
    protected $fillable = ['id_product'];
}
