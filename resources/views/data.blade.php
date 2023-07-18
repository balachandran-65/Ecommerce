<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view queries</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  <div class=" grid grid-cols-3 gap-4" x-data="{
   size:[27,29,29,30]

  }">
    <div class="product_image_1">
    <div class="single image w-96">
        <!-- first image and starting image  -->
        <div class="w-96 relative">
            <img src="product.png" alt="">
            <!--mens photo_attach footer  -->
            <div class="w-96 bg-gray-900  h-16 min-h-0 absolute bottom-0 text-white flex items-center justify-between font-serif ">
                <span> RS:<span class="text-white ml-3 font-mono" x-text="color_click==1? val:''"></span></span>
      
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
                @foreach (size as s)
                <span class="dot   flex items-center justify-center border-2 rounded-full pl-2 pr-2 pt-1 pb-1" x-text="$s"></span>
                    
                @endforeach
                
                                 
            </div>
            <div class="flex gap-3 ">
                <span name="color" x-on:click="color_click=1" :class="color_click==1 ? 'fill_color':' bg-gray-300 p-5 rounded-full';"><span class="text-white"x-show="color_click==1">✔️</span></span>
                <span name="color" x-on:click="color_click=2" :class="color_click==2? 'fill_color':' bg-gray-300 p-5 rounded-full';"></span>
                <span name="color" x-on:click="color_click=3" :class="color_click==3? 'fill_color':' bg-gray-300 p-5 rounded-full';" ></span>
                
            </div>

           </div>
        </div>
    </div>
     

  </div>
</body>
</html>