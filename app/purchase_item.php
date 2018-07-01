<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_item extends Model
{
      public $timestamps = false;

      protected $table = "purchase_item";
      protected $primarykey = "id_purchase_item";
      protected $fillable = ['id_product','total_price'];
}
