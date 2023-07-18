<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    Protected $fillables=['size'];
    public function sizes()
    {
        return $this->hasMany(PriceColorSize::class,'sizes_id');
    } 
}
