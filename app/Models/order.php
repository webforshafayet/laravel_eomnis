<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    /**
     * 
     * 
     *  @var array
     */

     protected $guarded=[];


     public function product(){
        return $this->belongsTo(product::class,'product_id');
    }
}
