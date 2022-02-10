<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class watchlist extends Model
{
    protected $fillables =[
        'user_id',
        'product_id',
        'tittle',
        'description',
        'color',
        'size',
        'price',
        'condition',
        'boxcondition',
        'image',
        'status',

    ];

    public function product(){
        return $this->belongsTo(product::class,'product_id');
    }
}
