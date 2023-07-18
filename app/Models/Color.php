<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    Protected $fillables=['color_name'];
    public function colors()
    {
        return $this->hasMany(PriceColorSize::class,'colors_id');
    } 
}
