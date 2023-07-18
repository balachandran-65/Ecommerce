<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Color;
use App\Models\Size;
use App\Models\Category;
use App\Models\LoginRegister;
use App\Models\product;
use App\Models\PriceColorSize;
use App\Models\Cart;
use App\Models\site_details;
use App\Models\liveuser;
use App\Models\Commenttable;


class products extends Controller
{
    //color insert
  //   public function color_insert(){
  //     // dd($request);
  //     $user_obj=new Color();//models name
  //     $user_obj->color_name="blue";
  //     $user_obj->save();
  //    return "insert sucessfully";//htmlphp blade name
  //  }

    //  insert size
    //  public function size_insert(){
    //     // dd($request);
    //     $user_obj=new Size();//models name
    //     $user_obj->size="38";
    //     $user_obj->save();
    //   return "insert sucessfully";//htmlphp blade name
    //  }
    //  categories insert
    //  public function category_insert(){
    //     // dd($request);
    //     $user_obj=new Category();//models name
    //     $user_obj->category_name="FORMAL";
    //     $user_obj->save();
    //   return "insert sucessfully";//htmlphp blade name
    //  }
    //  user details inserted
    //  public function loginregister_insert(){
    //     // dd($request);
    //     $user_obj=new LoginRegister();//models name
    //     $user_obj->user_name="chandru";
    //     $user_obj->user_email="chandru@gamil.com";
    //     $user_obj->user_password="chandru123";
    //     $user_obj->save();
    //   return "insert sucessfully";//htmlphp blade name
    //  }
    //  product insert with forieng key
    //  public function product_insert(){
     
    //     $user_obj=new Product();//models name
    //     $user_obj->product_name="FULL-HAND-T-SHIRT";
    //     $user_obj->product_img="product.png";
    //     $user_obj->categories_id=4;

    //     $user_obj->save();
    //   return "insert sucessfully";//htmlphp blade name
    //  }
    //  price and color and sizes insert
     public function pricecolorsize_insert(){
     
        $user_obj=new PriceColorSize();//models name
        $user_obj->price=310;
        $user_obj->products_id=2;
        $user_obj->colors_id=2;
        $user_obj->sizes_id=1;

        $user_obj->save();
      return "insert sucessfully";//htmlphp blade name
     }
    //  cat insert
   //   public function cart_insert(){
     
   //      $user_obj=new Cart();//models name
   //      $user_obj->cart_name="siva";
   //      $user_obj->products_id=2;
   //      $user_obj->categories_id=8;

   //      $user_obj->save();
   //    return "insert sucessfully";//htmlphp blade name
   //   }

    //  inser site details
    //  public function site_details_insert(){
     
    //     $user_obj=new site_details();//models name
    //     $user_obj->logo="logo.svg";
    //     $user_obj->site_name="FAITH FULLBRAND";
    //     $user_obj->save();
    //     return "insert sucessfully";
    //  }

      //htmlphp blade name
     


    //  first child table user products

   //  public function product(){
   //      $data=product::with('category')->get();
   //      return $data;
   //  }

   //  public function colors(){
   //      $data=PriceColorSize::with('color','size')->get();
   //      return $data;
   //  } 
  //  public function liveusers_insert(){
  //       // dd($request);
  //       $user_obj=new liveuser();//models name
  //       $user_obj->name="firstuser";
  //       $user_obj->save();
  //      return "insert sucessfully";//htmlphp blade name
  //    }
    public function product_insert(){
     
        $user_obj=new Product();//models name
        $user_obj->product_name="shoe";
        $user_obj->product_img='shoe.svg';
        $user_obj->categories_id=2;

        $user_obj->save();
      return "insert sucessfully";//htmlphp blade name
     } 


  

    //       public function category_insert(){
    //     // dd($request);
    //     $user_obj=new Category();//models name
    //     $user_obj->category_name="MEN'S";
    //     $user_obj->save();
    //   return "insert sucessfully";//htmlphp blade name
    //  }
    
    public function category_select($id){
      // dd($id);
      return view('livewirecomments',compact('id'));
    }



    public function price_control($product,$size,$color){
    
      $cash =PriceColorSize::
      where('products_id','=',$product)->
      where('colors_id','=',$color)->
      where('sizes_id','=',$size)->get();
      // dd($cash);
      return response()->json($cash);
    }

   

}
