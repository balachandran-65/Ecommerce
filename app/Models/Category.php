<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;

class Category extends Model
{
    use HasFactory;
    Protected $fillable=['category_name'];
    public function category()
    {
        return $this->hasMany(products::class,'products_id');
    } 

 

}
