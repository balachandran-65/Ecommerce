<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livewire comments blade call page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
   
</head>
<body>

    <div class="bg-green-1.0" x-data="{
        login:false,
        reg:false
      
      }">
        <div class="flex items-center justify-between m-10 h-10">
            <!-- logo section //bg-indigo-100-->
            
            <livewire:tickets /> 
            <!-- logo section end -->
      
            <!-- sitename section -->
            <livewire:mainpage />
            <!--sitename section  end  -->
            
            <!-- user login&register section -->
            <div class="w-40  ml-96">
                    @guest
                       <div class=" mr-30 flex items-center border-2 border-gray-400 p-1 justify-around text-slate-600">
                        <div class="div " >
                            <p @click="login=!login">Login</p>
                        </div>
                        <div class="div">
                            <p>|</p>
                        </div>
                        <div  class="div">
                            <P @click="reg=!reg">Register</P>
                        </div>
                        
                    </div>
                    @endguest


                    @Auth
                  
                    <livewire:logout />
                    @endAuth
               
                

               
            </div>
            <!-- user link  reg end -->
        </div>

            

       
                  


        
            <livewire:home  :id="$id" />
          

         
       
            {{-- <livewire:produts /> --}}
    
            <livewire:search />

            <livewire:login />
            <livewire:register />

        
 


    @livewireScripts
</body>
</html>