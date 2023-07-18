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
use App\Models\Cart;

class Home extends Component
{


      public $title;
      public $category;
      public $size;
      public $colors;
      public $price;
      public $products;
      
      // public $username;
      public $count=1;
      public $category_id;
      public $search_product='';
      
      public $add_cart_img='bag.svg';
      public $cart_store;
     
      
  
      // public $site_details;
      public function mount($id){
        $this->category_id = $id;
        $this->site_details=site_details::all();
        $this->category=Category::all();
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
      // search 

      public function search(){
        
        if($this->search_product){
          $this->site_details=site_details::all();
          $this->category=Category::all();
          $this->size=Size::all();
          $this->colors=Color::all();
          $this->products = product::with([
          'product',
          'product.color',
          'product.size',
          ])->where('categories_id',$this->category_id)->where('product_name', 'LIKE', '%'.$this->search_product.'%')->get();


        }else{
          $this->dispatchBrowserEvent('search');
        }
  
      }
    

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
                $this->dispatchBrowserEvent('addtocart');
                // session()->flash('message', 'product inserted successfully.');
          }else{
            dd('Please login this site.');
          }
         
       
          
        }

        


      




    

   
    public function render()
    {   
      
   
        return view('livewire.home');
    }
}

