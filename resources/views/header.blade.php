<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header section for  e_products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <div x-data="{
        login_click:false
        
        
    }">
    <div class=" flex items-center justify-between m-10 h-10">
        <!-- logo section //bg-indigo-100-->
        <img src="logo.svg" alt=""> 
        <!-- logo section end -->

        <!-- sitename section -->
        <div class="ml-40 text-xl"> <h2>FAITH FULLBRAND</h2></div>
        <!--sitename section  end  -->
        
        <!-- user login&register section -->
        <div class=" scroll-px-5 w-40" >
                <div class="flex items-center border-2 border-gray-400 p-1 justify-around text-slate-600">
                    <div class="div">
                        <p x-on:click="login_click=true"  @click.outside="login_click=false">Login</p>
                    </div>
                    <div class="div">
                        <p>|</p>
                    </div>
                    <div class="div">
                        <P x-on:click="register_click=true">Register</P>
                    </div>
                </div>
        </div>
        <!-- user login reg end -->
    </div>


    
    {{-- login register page   --}}
    <div class="hole fixed left-0 top-0 bottom-0  right-0 z-10 bg-black/50"
    x-show="login_click==true"  >
      <div class="flex justify-center items-center pt-20">
        <form class="w-96 bg-gray-400 p-8 rounded-xl h-96 ">
            <div class="container ">
              <h1>Login</h1>
             
              <hr>
          
              <label class="pt-2" for="email"><b class="">Email</b></label><br>
              <input class="mt-2" type="text" placeholder="Enter Login Email" name="email" id="email" required><br>
          
              <label class="mt-2" for="psw"><b class="mt-2">Password</b></label><br>
              <input class="mt-2" type="password" placeholder="Enter Login Password" name="psw" id="psw" required><br>
          
              <label class="mt-2" for="psw-repeat"><b>Repeat Password</b></label><br>
              <input class="mt-2" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>
              
              <br>
          
             
              <button class="mt-2" type="submit" class="registerbtn">Login</button>
            </div>
          
            
          </form> 
        </div>

    </div >

    {{--  --}}
    </div>


    {{-- register page   --}}
    {{-- <div class="hole fixed left-0 top-0 bottom-0  right-0 z-10 bg-black/50 none"
    x-show="register_click==true" >
      <div class="flex justify-center items-center pt-20">
        <form class="w-96 bg-gray-400 p-8 rounded-xl h-96 ">
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
        </div>

    </div > --}}

    {{--  --}}
    </div>
</body>
</html>