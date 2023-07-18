<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use App\Models\site_details;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\PriceColorSize;
use App\Models\product;
use App\Models\User;

class Produts extends Component
{
 
  public $size;
  public $colors;
  public $price;
  public $products;
  

  public $category_id;
  public $search_product='';
  
  public $add_cart_img='bag.svg';
  public $cart_store;

  public function mount($id){
    $this->category_id = $id;
    
    
    $this->size=Size::all();
    $this->colors=Color::all();
    $this->products = product::with([
    'product',
    'product.color',
    'product.size',
    ])->where('categories_id', $this->category_id)->get();

    if(Auth()->check()){
      $this->cart_count=Cart::where('users_id','=', Auth()->user()->id)->count();   
    }
  }







}

