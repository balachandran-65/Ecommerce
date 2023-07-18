<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Models\product;
use App\Models\Category;
use App\Http\Livewire\Counte;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::get('/', function () {

    
    return redirect()->to('a/1');
});


Route::get('a/{product}/{size}/{color}',[products::class,'price_control']);

Route::get('a/{id}',[products::class,'category_select']);


// Route::get('/', function () {
//     return view('product_index');
// });
// Route::get('/login', function () {
//     return view('login_reg');
// });

// insertion data into models;
// Route::get('/insert',[products::class,'color_insert']);
// Route::get('/insert',[products::class,'size_insert']);
// Route::get('/insert',[products::class,'category_insert']);
// Route::get('/insert',[products::class,'loginregister_insert']);
// route::get('/insert',[products::class,'product_insert']);
// route::get('/insert',[products::class,'pricecolorsize_insert']);
// Route::get('/insert',[products::class,'cart_insert']);
// Route::get('/insert',[products::class,'site_details_insert']);

// $datas = product::with('categories')->get();


// Route::get('/data', function () {
//     $datas = product::with('categories')->get();

//     return $datas;
// });

// products (first child table)table conent

// Route::get('/product',[Products::class,'product']);
// Route::get('/colors',[Products::class,'colors']);

// Route::get('/sizes',[Products::class,'colors']);


// alpine js training start ----------------------------------------------------

// Route::get('/alpine', function () {
//     return view('alpinejs');
// });


//ecommerce work task it is not this project below here
// Route::get('/header', function () {
//     return view('header');
// })->name('home');

// Route::get('/data', function () {
//     return view('data');
// });

// Route::get('/mens', function () {
//     return view('menspage');
// });

// Route::get('/e', function () {
//     return view('ecommerce');
// });

Route::get('/insert',[products::class,'pricecolorsize_insert']);

// live start here





// // 
//  Route::get('/header', function () {
//      return view('header');
// })->name('ref_header');

//  Route::get('/login', function () {
//          return view('login');
// })->name('ref_login');

// Route::get('/register', function () {
//      return view('register');
//  })->name('ref_register');



// Route::get('a/{product}/{size}/{color}',[Counte::class,'price']);

// insert into price_color_sizes(price,categories_id,colors_id,sizes_id,created_at,updated_at) values(250,8,5,1,now(),now());