<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceColorSize extends Model
{
    use HasFactory;
    Protected $fillables=['price','products_id','colors_id','sizes_id'];
    public function color()
            {
                return $this->belongsTo(Color::class,'colors_id');
            } 

    public function product()
            {
                return $this->belongsTo(product::class,'products_id');
            }         
    public function size()
            {
                return $this->belongsTo(Size::class,'sizes_id');
            } 
} 

