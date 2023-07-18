<style>
        .fill_color,.fill_color_2,.fill_color_3{
            border-radius: 50%;
           width: 20px;
           height: 20px;
           padding: 18px;
           

           }
</style>
    <div x-data="{
        login_click:false,
        register_click:false,
        
        category_select:1,
        category_active:1,

        search:'',

        
        
    }">
    <div class="flex items-center justify-between m-10 h-10">
        <!-- logo section //bg-indigo-100-->
        <img src="{{$site_details[0]->logo}}" alt=""> 
        <!-- logo section end -->

        <!-- sitename section -->
        <div class="ml-96 text-xl"> <h2>{{$site_details[0]->site_name}}</h2></div>
        <!--sitename section  end  -->
        
        <!-- user login&register section -->
        <div class="w-40 bg-green-300 ml-96">
                <div class=" mr-30 flex items-center border-2 border-gray-400 p-1 justify-around text-slate-600">
                    <div class="div " >
                        <p ><a href="login">Login</a></p>
                    </div>
                    <div class="div">
                        <p>|</p>
                    </div>
                    <div  class="div">
                        <P><a href="register">Register</a></P>
                    </div>
                </div>
        </div>
        <!-- user link  reg end -->
    </div>


    
    {{-- login register page   --}}
    {{-- <div class="hole flex items-center justify-center mt-15 h-96 "
    x-show="register_click" x-transition>
        <form class="w-96 bg-gray-600 p-8 rounded-xl h-96" >
            <div class="container ">
              <h1>Register</h1>
             
              <hr>
          
              <label class="pt-2" for="email"><b class="">Email</b></label><br>
              <input class="mt-2" type="text" placeholder="Enter Email" name="email" id="email" required><br>
          
              <label class="mt-2" for="psw"><b class="mt-2">Password</b></label><br>
              <input class="mt-2" type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
          
              <label class="mt-2" for="psw-repeat"><b>Repeat Password</b></label><br>
              <input class="mt-2" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>
              
              <br>
          
             
              <button class="mt-2" type="submit" class="registerbtn">Register</button>
            </div>
          
            <div class="">
              <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
          </form> 

    </div > --}}

    {{-- login --}}
    {{-- <div class="hole flex items-center justify-center mt-15 h-96 "
    x-show="login_click"  x-transition>
        <form class="w-96  bg-gray-600 p-8 rounded-xl h-96">
            <div class="container ">
              <h1>login</h1>
             
              <hr>
          
              <label class="pt-2" for="email"><b class="">Email</b></label><br>
              <input class="mt-2" type="text" placeholder="Enter Email" name="email" id="email" required><br>
          
              <label class="mt-2" for="psw"><b class="mt-2">Password</b></label><br>
              <input class="mt-2" type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
          
              <label class="mt-2" for="psw-repeat"><b>Repeat Password</b></label><br>
              <input class="mt-2" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>
              
              <br>
          
             
              <button class="mt-2" type="submit" class="loginbtn">login</button>
            </div>
          
          
          </form> 

    </div > --}}

    {{-- <h1>{{$category}}</h1> --}}
  {{-- categoy start --}}
  <div class=" static flex items-center justify-between m-5 h-10 ml-10 mr-10"
  x-data="{
    category_id:null
  }">
    <!-- categories insert -->
    
     <div class="h-14 border-y border-black w-screen flex items-center  justify-between">
        <div class="flex items-center ">
        @foreach($category as $get_c)
        
         <div wire:click="category='{{$get_c->id}}'" :class="category_id=={{$get_c->id}}?'border-r bg-black text-white h-14 p-2 border-black hover:bg-black hover:text-white flex items-center' :'border-r  text-black h-14 p-2 border-black hover:bg-black hover:text-white flex items-center' "><p>{{$get_c['category_name']}}{{$count}}</p></div>
         <?php
         $count++;
         ?>
         
        @endforeach
        </div>
         <!-- category right side include serchbar and etc -->
         <div class=" apsolute right-0  left- ">
            <div class="flex items-center ml-5 ">
                <input type="text" x-model="search" placeholder="Search.." name="search">
                <button type="submit" class="ml-2">
                    <img src="search.svg" alt="">
                </button>
 
                <span class="flex items-center ml-10 gap-3">
                    <a href="">CART</a>
                    <img src="cart.svg" alt="can't load" class="mb-1">
             
                </span>
            </div>
         </div>
         <!-- category right side include serchbar and etc end -->
         
      
     </div>
 
 </div>
  {{-- category end --}}

  {{-- color_id:1,
  size_id:1,
  default_size_style:'flex items-center justify-center 
  border-2 rounded-full pl-2 pr-2 pt-1 pb-1',
  click_for_size:'bg-green-400',

  color_click:false,
  curent_color: '',

  category_dafult_class:'border-r bg-black text-white h-14 p-2 border-black hover:bg-black hover:text-white flex items-center' --}}


    {{--  --}}
    <div x-show="" class=" grid grid-cols-3 gap-6 ml-10 mr-10" x-data="{
       
        
       }">
         {{--  product-1 start--}}
       {{-- @foreach() --}}
         {{-- <div class="single image w-96">
             <!-- first image and starting image  -->
             
             <div class="w-96 relative">
                 <img src="{{$product_img}}" alt="">
                 <!--mens photo_attach footer  -->
                 <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                     <span> RS:<span class="text-white ml-3 font-mono" x-text=""></span></span>
           
                     <span class="mr-3 flex items-center gap-3 font-mono">
                     <img src="{{$add_cart_img}}" alt="" class="mb-1">
                     <span> ADD CARD</span>
                
             
                 </div>
             
             </div>
             <div>
                 <p class="mt-3">products</p>
                  <div class="flex justify-between mt-3 text-gray-500">
                  <p class="">SIZE</p>
                  <p class="mr-20">COLOR</p>
              </div>
               <div class="flex justify-between mt-3">
                 <div class="flex gap-2" x-data="{
                  size_val:'',
                  default_size:'border-2 border-black p-1 px-2.5  rounded-full flex items-center justify-center',
                  click_size:'border-2 border-black p-1 px-2.5 text-white bg-black rounded-full flex items-center justify-center'
                 }">
                     @foreach ($size as $s)
                     <span name="size" @click="size_val={{$s->id}}" :class="size_val=={{$s->id}}? click_size : default_size">{{$s->size}}</span>
                         
                     @endforeach
                     <p x-text="size_val">text</p>

                     
                                      
                 </div>
                 <div class="flex gap-3 " x-data="{
                 color_val:'',
                 default_color:' p-5 rounded-full',
                 click_color:' p-1 rounded-full'
                 }">
                
                    @foreach($colors as $c)
                      
                      <span  name="color" @click="color_val={{$c->id}}" :class="color_val=={{$c->id}}? 'bg-{{$c->color_name}}-300' + click_color : 'bg-{{$c->color_name}}-300' + default_color ">

                        <svg x-show="color_val=={{$c->id}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 mt-1">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </span>
          
                     
                    @endforeach
                    <p x-text="color_val">text</p>
                     
                 </div>
     
                </div>
             </div>
         </div> --}}
         {{-- @endforeach --}} 



         @foreach($products as $product_details)
  <div class="single image w-96"
  x-data="{
   size_val: 1,
   color_val: 1,
   price: '',
   change() {
       fetch(`http://127.0.0.1:8000/a/${this.size_val}/${this.color_val}`)
           .then(data => data.json())
           .then(data => {
               this.price = data['0']['price']
           })
   }
}" x-effect="change" >
   <!-- first image and starting image  -->
 {{-- <p x-text="price"></p> --}}
   
   <div class="w-96 relative">
       <img src="{{$product_details->product_img}}" alt="">
       <!--mens photo_attach footer  -->
       <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
           <span> RS:<span class="text-white ml-3 font-mono" x-text="price">160</span></span>
 
           <span class="mr-3 flex items-center gap-3 font-mono">
           <img src="{{$add_cart_img}}" alt="" class="mb-1">
           <span> ADD CARD</span>
      
   
       </div>
   
   </div>
   <div>
       <p class="mt-3">{{$product_details->product_name}}</p>
        <div class="flex justify-between mt-3 text-gray-500">
        <p class="">SIZE</p>
        <p class="mr-20">COLOR</p>
    </div>
     <div class="flex justify-between mt-3">
       <div class="flex gap-2" x-data="{
        
        default_size:'border-2 border-black p-1 px-2.5  rounded-full flex items-center justify-center',
        click_size:'border-2 border-black p-1 px-2.5 text-white bg-black rounded-full flex items-center justify-center'
       }">
           @foreach ($product_details->product as $s)
           <span name="size" @click="size_val={{$s->size->id}};search={{$s->size->id}}" :class="size_val=={{$s->size->id}}? click_size : default_size" >{{$s->size}}</span>
               {{-- <p >{{$product_img}}</p> refrence for  --}}
           @endforeach
           {{-- <p x-text="size_val">text</p> --}}

           
                            
       </div>
       <div class="flex gap-3 " x-data="{
      
       default_color:' p-5 rounded-full',
       click_color:' p-1 rounded-full'
       }">
      
          @foreach($colors as $c)
          @foreach($product_details->product as $c)
            <span  name="color" @click="color_val={{$c->color->id}}" :class="color_val=={{$c->id}}? 'bg-{{$c->color_name}}-300' + click_color : 'bg-{{$c->color_name}}-300' + default_color ">

              <svg x-show="color_val=={{$c->id}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
          </span>
          @endforeach
           
          @endforeach
          <p x-text="color_val">text</p>
           
       </div>

      </div>
   </div>
</div>
@endforeach

























{{-- first method  --}}
      @foreach($products as $p)
        {{$p->product_name}}
        {{-- <img src="{{$p->product_img}}" alt=""> --}}
        
       @foreach($p->product as $je)
       {{$je->color->color_name}}
        
       @endforeach 

       @foreach($p->product as $jee)
       {{$jee->size->size}}
        
       @endforeach

        <br>
      @endforeach
 {{-- first method --}}





         
        
         {{--product-1 end --}}



{{--          
        @foreach($prod as $jeeva)
            product={{$jeeva->product->product_name}}
            {{-- id={{$jeeva->id}} --}}
            {{-- size={{$jeeva->size}}
            color={{$jeeva->color->color_name}}
            price={{$jeeva->price}}
            <br>
          
            <hr>
        @endforeach 
         --}}
       
       
    </div>



