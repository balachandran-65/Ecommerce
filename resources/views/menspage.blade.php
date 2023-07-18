<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>men's page ecommerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
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
            \2713
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
</head>
<body>
   <div x-data="{
    color_click:0,
    size_click:0,
    val:100,
    va:300,
    symbol:''
   

   }">
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
                <span class="dot   flex items-center justify-center">28</span>
                <span x-on:click="size_click=1" :class="size_click==0? 'border-2 border-black p-1 px-2 text-white bg-black rounded-full flex items-center justify-center' :''">30</span>
                <span x-on:click="" class="dot   flex items-center justify-center">36</span>
                <span x-on:click="" class="dot   flex items-center justify-center">38</span>                   
            </div>
            <div class="flex gap-3 ">
                <span name="color" x-on:click="color_click=1" :class="color_click==1? ' bg-gray-300 p-1 rounded-full':' bg-gray-300 p-5 rounded-full';">
                  </span>
                <span name="color" x-on:click="color_click=2" :class="color_click==2? 'fill_color':' bg-blue-300 p-5 rounded-full';"></span>
                <span name="color" x-on:click="color_click=3" :class="color_click==3? 'fill_color':' bg-red-300 p-5 rounded-full';" ></span>
                
            </div>

           </div>
        </div>
      
    </div>

    <div class="newmen">
        {{--  --}}
        


        {{--  --}}

    </div>
</body>
</html>