<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\site_details;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\PriceColorSize;
use App\Models\product;


class Counte extends Component
{
    // public $logo_bind="logo.svg";
    public $title;
    public $category;
    public $size;
    public $colors;
    public $price;
    public $products;
    public $priceget;
    

    // public $site_details;
    public function mount(){
        $this->site_details=site_details::all();
        $this->category=Category::where('id' , 1)->get();
        
        $this->size=Size::all();
        $this->colors=Color::all();
        $this->product=product::all();
        $this->products = product::where('id' , 4)->with([
            'product',
            'product.color',
            'product.size',
        ])->get();

        // $this->prod = PriceColorSize::
        // join('products','price_color_sizes.products_id','=','products.id')->
        // join('colors','price_color_sizes.colors_id','=','colors.id')->
        // join('sizes','price_color_sizes.colors_id','=','sizes.id')->get();

        // $this->prod = product::
        // join('price_color_sizes','products.id','=','price_color_sizes.products_id')->
        // join('price_color_sizes','colors.id','=','price_color_sizes.colors_id')
     
        // ->get();
        // dd($this->prod);    
        // ->join('parts','parts.id','=','abks.part_id')
    //  dd($this->products);
    //    dd($this->products[0]->color->color_name);
     
    }



    // public function price(){

    //     $this->price=PriceColorSize::all();



    // }

    // product informations
    // public $product_img=['product.png','product.png','product.png','product.png'];
    public $add_cart_img='bag.svg';
    
    
   
    public $val=2;
    public $count=1;


    
   

    

   
    public function category($id){
        
        $this->active=$id;
    }
    public function render()
    {
        return view('livewire.counte');
    }
}
