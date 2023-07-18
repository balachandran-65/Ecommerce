<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;


use App\Models\Cart;

use Livewire\Component;

class Addtocart extends Component
{
   
// add to cart
 
    
public $user_id;
public $product_id;
public $cart_count;


public function addtocart($product_val){
    if(auth()->check()){
        $this->user_id = Auth()->user()->id;
        $this->product_id=$product_val;

        Cart::create([
          'users_id'=>$this->user_id,
          'products_id'=>$this->product_id]);
        
          session()->flash('message', 'product inserted successfully.');
    }else{
      session()->flash('message', 'Please login this site.');
    }
   
    
  }

    public function render()
    {
        return view('livewire.addtocart');
    }
}
