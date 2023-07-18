

<div>
{{-- product with categary section --}}
<div  x-data="{category_id:{{$category_id}}}" >
{{-- category section --}}
<div class=" static flex items-center justify-between m-5 h-10 ml-10 mr-10"
  x-data="{
    
    default_style_category:'border-r  text-black h-14 p-2 border-black hover:bg-black hover:text-white flex items-center',
    click_style_category:'border-r  text-white h-14 p-2 border-black bg-black text-white flex items-center'
    
  }">
    <!-- categories insert -->
    {{-- <p x-text="">text{{$cart_count}}</p> --}}
     <div class="h-14 border-y border-black w-screen flex items-center  justify-between">
        <div class="flex items-center ">
       
        @foreach($category as $get_c)
         
        
         <div @click="category_id={{$get_c->id}}" wire:click="$emit('category')"  :class="category_id=={{$get_c->id}} ?  click_style_category : default_style_category" >
          <a href="/a/{{$get_c['id']}}"  class="w-full h-full flex items-center">{{$get_c['category_name']}}</a>
          {{-- <p>{{$get_c['category_name']}}</p> --}}
        </div>
        
         
        @endforeach
        </div>
         <!-- category right side include serchbar and etc -->
         <div class=" apsolute right-0  left- ">
            <div class="flex items-center ml-5 ">
                
                <input type="text" placeholder="Search.." wire:model="search_product" name="" wire:keydown.enter="search">
                <button type="submit" class="ml-3" >
                     <img src="../search.svg" wire:click="search"  alt="">
                </button>
                <span class="flex items-center ml-10 gap-3">
                  <a href="" class="flex">CART <sup class="  rounded-full">@auth<p class="text-xm bg-green-400 p-2 rounded-full">{{$cart_count}}</p>@endauth</sup></a>
                  <img src="../cart.svg" alt="can't load" class="mb-1">
           
              </span>
            </div>
         </div>
         <!-- category right side include serchbar and etc end -->
         
      
     </div>
  <br>
   
     
 </div>
 {{-- category section end --}}
     {{-- <div x-show="category_id=={{$get_c->id}}">mens page </div>
     <div x-show={{}}>womens</div> --}}
</div>

<div  class=" grid grid-cols-3 gap-6 ml-10 mr-10"  >
  {{--  product-1 start--}}



 @foreach($products as $product_details)
  <div class="single image w-96"
  x-data="{
    {{-- product_id:{{auth::user()->}}, --}}
    product:2,
   size_val: 1,
   color_val: 1,
   price: 100,
   change() {
       fetch(`http://127.0.0.1:8000/a/${this.product}/${this.size_val}/${this.color_val}`)
           .then(data => data.json())
           .then(data => {
           
               this.price =data[0]['price']
           })
   }

  
}" x-effect="change" >
   <!-- first image and starting image  -->
 {{-- <p x-text="price"></p> --}}
   
   <div class="w-96 relative">
       <img src="../{{$product_details->product_img}}" alt="">
       <!--mens photo_attach footer  -->
       <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
           <span> RS:<span class="text-white ml-3 font-mono"   x-text="price"></span></span>
        
         <span class="mr-3 flex items-center gap-3 font-mono"    >
             <img src="../{{$add_cart_img}}" alt="" class="mb-1">
  
   <span > <button wire:click="addtocart({{$product_details->id}})" class="" >ADD CART</button></span></span>
     
        
   
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
           @foreach ($size as $s)
           <span name="size" @click="size_val={{$s->id}};search={{$s->id}};product={{$product_details->id}}" :class="size_val=={{$s->id}}? click_size : default_size" >{{$s->size}}</span>
             
           @endforeach
           

           
                            
       </div>
       <div class="flex gap-3 " x-data="{
      
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
          {{-- <p x-text="color_val">text</p> --}}
           
       </div>

      </div>
   </div>
 </div>
 @endforeach

</div>
  {{--product-1 end --}}

</div>

<script>

  window.addEventListener('search',function(){
    alert('search input box is empty');
  })

  window.addEventListener('addtocart', function () {
    alert('added successfully');
   window.location.href = '/';
  });
  </script>






