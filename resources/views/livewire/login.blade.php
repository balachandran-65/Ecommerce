<div x-show="login"  style="display: none !important" class="fixed flex justify-center items-center left-0 right-0 bottom-0 top-0  bg-black/70" x-cloak>

  <form class="w-96 bg-white p-8  h-98 border-2 border-black " 
  wire:submit.prevent="login_submit"   @click.outside="login=false">
      <div class="flex justify-end" @click="login=false"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      </div>
      <div class="container ">
        <h1 class=" w-full pl-30  text-center">LOGIN</h1>
       
        <hr>
    
        <label class="pt-2 w-full" for="email"><b class="">Email</b></label><br>
        <input class="mt-2 w-full  border-black border-2  h-10" type="text" placeholder="Enter Email" name="email" id="email" wire:model="login_submit.email"><br>
         @error('login_form.email') <span class="error">{{ $message }}</span> @enderror
         <br>

        <label class="mt-2" for="psw"><b class="mt-2">Password</b></label><br>
        <input class="mt-2 w-full border-black border-2 h-10" type="password" placeholder="Enter Password" name="psw" id="psw"  wire:model="login_submit.password"><br>
        @error('login_form.password') <span class="error">{{ $message }}</span> @enderror
       
        <br>
    
       
        <button class="mt-2 p-3 bg-black w-full text-white" type="submit" >Login</button>
      </div>
      {{-- <div class="flex justify-between items-center w-full mt-5">
      <p class="bg-gray-500 p-2 rounded"><a href="register">Reg</a><p>
      <p  class="bg-gray-500 ml-40 p-2 rounded" @click="login=false">home<p></div>
     --}}
      {{-- <div class="none">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
      </div> --}}
    </form> 

</div>





