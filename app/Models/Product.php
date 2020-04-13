<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name' , 
        'slug' ,
        'category_id' ,
        'quantity' ,
        'actual_price' ,
        'previous_price',
        'short_description' ,
        'large_description' ,
        'specifications' ,
        'data_of_interest' ,
        'percentaje_desc' ,
        'visits' ,
        'sales' ,
        'status' ,
        'active' ,
        'slider_principal' 
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
