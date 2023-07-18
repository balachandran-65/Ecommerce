


<div x-show="reg"  style="display: none !important" class="fixed flex justify-center items-center left-0 right-0 bottom-0 top-0  bg-black/70" x-cloak>

  <form class="w-96  p-3  h-{40px} border-black bg-white border-2" 
  wire:submit.prevent="submit"  @click.outside="reg=false">
        <div class="flex justify-end" @click="reg=false"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      <div class="container ">
        <h1 class="flex justify-center">Register</h1>
       
       
        <label class="pt-1 w-full" for="email"><b class="">Name</b></label><br>
        <input class="mt-1 w-full border-black border-2 h-10" type="text" placeholder="Enter Email" name="email" id="email" wire:model="register_form.name"><br>
        @error('register_form.name') <span class="error">{{ $message }}</span> @enderror
        <br>
    
        <label class="pt-1 w-full" for="email"><b class="">Email</b></label><br>
        <input class="mt-2 w-full  border-black border-2  h-10" type="email" placeholder="Enter Email" name="email" id="email" wire:model="register_form.email"><br>
        @error('register_form.email') <span class="error">{{ $message }}</span> @enderror
        <br>
        <label class="mt-1" for="psw"><b class="mt-2">Password</b></label><br>
        <input class="mt-1 w-full  border-black border-2  h-10" type="password" placeholder="Enter Password" name="psw" id="psw"  wire:model="register_form.password"><br>
        @error('register_form.password') <span class="error">{{ $message }}</span> @enderror
        <br>
        
    
       
        <button class=" p-3 bg-black text-white w-full" type="submit" class="registerbtn">Register</button>
      </div>
    
      {{-- <div class="">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
      </div> --}}
    </form> 

</div>
