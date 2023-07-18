<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
    <title>Ecommerce web site </title>
    <style>
               .color_round{
            margin-top:3px;
         border-radius: 50%;
        width: 20px;
        height: 20px;
        padding: 10px;
        background-color:red;

}   
.dot {
           
           border-radius: 50%;
           width: 20px;
           height: 20px;
           padding: 15px;
           
           border: 1px solid #000;
       
           text-align: center;
           font: 18px Arial, sans-serif;
              }
           .fill_color{
            background-color:#34415e;
           }   
           .fill_color_2{
            background-color: #5c4732;
           }
           .fill_color_3{
            background-color: #8f8e89;
        
           }
           .fill_color,.fill_color_2,.fill_color_3{
            border-radius: 50%;
           width: 20px;
           height: 20px;
           padding: 18px;
           

           }
           .row{
            display:flex;
           }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{-- header section --}}
    <div class=" flex items-center justify-between m-10 h-10">
        <!-- logo section //bg-indigo-100-->
        <img src="logo.svg" alt=""> 
        <!-- logo section end -->

        <!-- sitename section -->
        <div class="ml-40 text-xl"> <h2>FAITH FULLBRAND</h2></div>
        <!--sitename section  end  -->
        
        <!-- user login&register section -->
        <div class=" scroll-px-5 w-40">
                <div class="flex items-center border-2 border-gray-400 p-1 justify-around text-slate-600">
                    <div class="div">
                        <p onclick="">Login</p>
                    </div>
                    <div class="div">
                        <p>|</p>
                    </div>
                    <div class="div">
                        <P>Register</P>
                    </div>
                </div>
        </div>
        <!-- user login reg end -->
    </div>
    {{-- header section end --}}
    <div x-data="{
        mens_section:true,
        category_select:'bg-black text-white  h-14 p-2 flex items-center'
       
     }">

    {{-- category section --}}
    <div class=" flex items-center justify-between m-10 h-10">
        <!-- categories insert -->
         <div class="h-14 border-y border-black w-screen flex items-center ">
             <div x-on:click="mens_section=!mens_section":class="mens_section==true? category_select : 'border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center' " ><p>MEN'S</p></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center" ><P>KID'S</P></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center"><P>SPORTSWEAR</P></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center"><P>DRESSES</P></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center"><P>HOME</P></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center"><P>ACCESSORIES</P></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center"><P>SLEEPWEAR</P></div>
             <div class="border-r h-14 p-2 border-black hover:bg-black hover:text-white flex items-center"><P>WOMEN'S</p></div>
             <!-- category right side include serchbar and etc -->
             <div class="flex items-center ml-5">
                 <input type="text" placeholder="Search.." name="search">
                 <button type="submit" class="ml-2">
                     <img src="search.svg" alt="">
                 </button>
     
                 <span class="flex items-center ml-10 gap-3">
                     <a href="">CART</a>
                     <img src="cart.svg" alt="can't load" class="mb-1">
                 
                 </span>
             </div>
             <!-- category right side include serchbar and etc end -->
             
          
     
     
         </div>
         <!-- categories end -->
     
     </div>
    {{-- category sesction end --}}


    {{-- main mens page start here --}}
     <div x-show="mens_section==true" class="main m-10" >
        {{-- first row  --}}
        <div class="row flex gap-7">
            <div class="container">
             <div class="w-96">
                <!-- first image and starting image  -->
                <div class="w-96 relative">
                    <img src="product.png" alt="">
                    <!--mens photo_attach footer  -->
                    <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                        <span class="text-white ml-3 font-mono">RS.1000</span>
              
                        <span class="mr-3 flex items-center gap-3 font-mono">
                        <img src="bag.svg" alt="" class="mb-1">
                        <span> ADD CARD</span>
                   
                
                    </div>
                
                </div>
                <div>
                    <p class="mt-3">HOODI</p>
                     <div class="flex justify-between mt-3 text-gray-500">
                     <p class="">SIZE</p>
                     <p class="mr-20">COLOR</p>
                 </div>
                 <div class="flex justify-between mt-3">
                    <div class="flex gap-2">
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot  flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>                   
                    </div>
                    <div class="flex gap-3 ">
                        <span class="fill_color  "></span>
                        <span class="fill_color_2 "></span>
                        <span class="fill_color_3 "></span>
                        
                    </div>
        
                  </div>
                 </div>
                </div>
            </div>
            <div class="container">
            <div class="w-96">
                <!-- first image and starting image  -->
                <div class="w-96 relative">
                    <img src="product.png" alt="">
                    <!--mens photo_attach footer  -->
                    <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                        <span class="text-white ml-3 font-mono">RS.1000</span>
              
                        <span class="mr-3 flex items-center gap-3 font-mono">
                        <img src="bag.svg" alt="" class="mb-1">
                        <span> ADD CARD</span>
                   
                
                    </div>
                
                </div>
                <div>
                    <p class="mt-3">Product1</p>
                     <div class="flex justify-between mt-3 text-gray-500">
                     <p class="">SIZE</p>
                     <p class="mr-20">COLOR</p>
                 </div>
                 <div class="flex justify-between mt-3">
                    <div class="flex gap-2">
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot  flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>                   
                    </div>
                    <div class="flex gap-3 ">
                        <span class="fill_color  "></span>
                        <span class="fill_color_2 "></span>
                        <span class="fill_color_3 "></span>
                        
                    </div>
        
                  </div>
                </div>
             </div>
            </div>
            
           
        <div class="container">
            <div class="w-96">
                <!-- first image and starting image  -->
                <div class="w-96 relative">
                    <img src="product.png" alt="">
                    <!--mens photo_attach footer  -->
                    <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                        <span class="text-white ml-3 font-mono">RS.1000</span>
              
                        <span class="mr-3 flex items-center gap-3 font-mono">
                        <img src="bag.svg" alt="" class="mb-1">
                        <span> ADD CARD</span>
                   
                
                    </div>
                
                </div>
                <div>
                    <p class="mt-3">Product1</p>
                     <div class="flex justify-between mt-3 text-gray-500">
                     <p class="">SIZE</p>
                     <p class="mr-20">COLOR</p>
                 </div>
                 <div class="flex justify-between mt-3">
                    <div class="flex gap-2">
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot  flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>                   
                    </div>
                    <div class="flex gap-3 ">
                        <span class="fill_color"></span>
                        <span class="fill_color_2 "></span>
                        <span class="fill_color_3 "></span>
                        
                    </div>
        
                  </div>
                </div>
             </div>
            </div>
            
        </div>
        
        {{-- second row --}}
        <div class="row flex gap-7 mt-4">
            <div class="container">
             <div class="w-96">
                <!-- first image and starting image  -->
                <div class="w-96 relative">
                    <img src="product.png" alt="">
                    <!--mens photo_attach footer  -->
                    <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                        <span class="text-white ml-3 font-mono">RS.1000</span>
              
                        <span class="mr-3 flex items-center gap-3 font-mono">
                        <img src="bag.svg" alt="" class="mb-1">
                        <span> ADD CARD</span>
                   
                
                    </div>
                
                </div>
                <div>
                    <p class="mt-3">Product1</p>
                     <div class="flex justify-between mt-3 text-gray-500">
                     <p class="">SIZE</p>
                     <p class="mr-20">COLOR</p>
                 </div>
                 <div class="flex justify-between mt-3">
                    <div class="flex gap-2">
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot  flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>                   
                    </div>
                    <div class="flex gap-3 ">
                        <span class="fill_color  "></span>
                        <span class="fill_color_2 "></span>
                        <span class="fill_color_3 "></span>
                        
                    </div>
        
                  </div>
                 </div>
                </div>
            </div>
            <div class="container">
            <div class="w-96">
                <!-- first image and starting image  -->
                <div class="w-96 relative">
                    <img src="product.png" alt="">
                    <!--mens photo_attach footer  -->
                    <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                        <span class="text-white ml-3 font-mono">RS.1000</span>
              
                        <span class="mr-3 flex items-center gap-3 font-mono">
                        <img src="bag.svg" alt="" class="mb-1">
                        <span> ADD CARD</span>
                   
                
                    </div>
                
                </div>
                <div>
                    <p class="mt-3">Product1</p>
                     <div class="flex justify-between mt-3 text-gray-500">
                     <p class="">SIZE</p>
                     <p class="mr-20">COLOR</p>
                 </div>
                 <div class="flex justify-between mt-3">
                    <div class="flex gap-2">
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot  flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>                   
                    </div>
                    <div class="flex gap-3 ">
                        <span class="fill_color  "></span>
                        <span class="fill_color_2 "></span>
                        <span class="fill_color_3 "></span>
                        
                    </div>
        
                  </div>
                </div>
             </div>
            </div>
            
           
        <div class="container">
            <div class="w-96">
                <!-- first image and starting image  -->
                <div class="w-96 relative">
                    <img src="product.png" alt="">
                    <!--mens photo_attach footer  -->
                    <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                        <span class="text-white ml-3 font-mono">RS.1000</span>
              
                        <span class="mr-3 flex items-center gap-3 font-mono">
                        <img src="bag.svg" alt="" class="mb-1">
                        <span> ADD CARD</span>
                   
                
                    </div>
                
                </div>
                <div>
                    <p class="mt-3">Product1</p>
                     <div class="flex justify-between mt-3 text-gray-500">
                     <p class="">SIZE</p>
                     <p class="mr-20">COLOR</p>
                 </div>
                 <div class="flex justify-between mt-3">
                    <div class="flex gap-2">
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot  flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>
                        <span class="dot   flex items-center justify-center">23</span>                   
                    </div>
                    <div class="flex gap-3 ">
                        <span class="fill_color  "></span>
                        <span class="fill_color_2 "></span>
                        <span class="fill_color_3 "></span>
                        
                    </div>
        
                  </div>
                </div>
             </div>
            </div>
            
        </div>
        
     </div>   
        
     {{-- main mens page end here--}}
    </div>
</body>
</html>