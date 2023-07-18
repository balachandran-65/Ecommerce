<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category ;

class product extends Model
{
    use HasFactory;
            Protected $fillable=['product_name','categories_id'];

            public function creator()
            {
                return $this->belongsTo(Category::class,'categories_id');


            } 
 
            public function product(){
                return $this->hasMany(PriceColorSize::class,'products_id');

            }
}
