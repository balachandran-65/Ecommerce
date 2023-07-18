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

      <livewire:register />




      <div x-data=‘{
        open: false,
        shown: false
                }’>
    <div class=“nav-align” style=“margin-bottom: 5px;“>
        <img src=“logo.svg” alt=“” class=“icon”>
        <h2 style=“margin:0px”> FAITHFUL <strong>BRAND</strong> </h2>
        <div class=justify-content-end>
            <button style=“background-color: #008CBA
; cursor: pointer; height:35px; width:130px;”
                @click=“shown = !shown”> Login </button>
            <button style=“background-color: #008CBA
; cursor: pointer; height:35px; width:130px;”
                @click=“open = !open”> Register </button>
        </div>
    </div>            {{-- REGISTRATION --}}
    <div x-show=“open” class=“fixed flex justify-center times-center left-0 right-0 bottom-0 top-0 bg-black/75"
        x-transition @click.outside=“open = false” x-cloak>
        <div class=“w-1/2 bg-white-500">
            <form action=“”>
                <div class=“container ” @click.outside=“open = false”>
                    <h1 class=“px-4 py-2 text-lg font-semibold gb-grey-100">Register</h1>                            <hr>
                    <div class=“p-4”>
                        <label for=“email”><b>Email</b></label><br>
                        <input type=“text” class=“inputreg” placeholder=“Enter Email” name=“email” id=“email”
                            required>                                <label for=“psw”><b>Password</b></label>
                        <input type=“password” class=“inputreg” placeholder=“Enter Password” name=“psw” id=“psw”
                            required>                                <label for=“pswrep”><b>Confirm Password</b></label>
                        <input type=“password” class=“inputreg” placeholder=“Repeat Password” name=“pswrep”
                            id=“pswrep” required>
                        <hr>                                <div style=“justify-content: space-between; display: flex”>
                            <button type=“submit”
                                style=“background-color: #008CBA
; cursor: pointer; height:35px; width:130px;“>Register</button>
                            <button type=“” class=“registerbtn bg-grey-300 rounded”
                                style=“background-color:slategrey” @click=“open = false”>Cancel</button>
                        </div>
                    </div>                    </form>
        </div>
    </div>            {{-- Login --}}
    <div x-show=“shown”
        class=“fixed flex justify-center times-center left-0 right-0 bottom-0 top-0  bg-black/50" x-transition
        x-cloak>
        <div class=“w-1/2 bg-white-500”>
            <form action=“”>
                <div class=“container ” @click.outside=“shown = false”>
                    <h1 class=“px-4 py-2 text-lg font-semibold gb-grey-100”>Login</h1>                            <hr>
                    <div class=“p-4">
                        <label for=“email”><b>Email</b></label><br>
                        <input type=“text” class=“inputreg” placeholder=“Enter Email” name=“email” id=“emaild”
                            required>                                <label for=“psw”><b>Password</b></label>
                        <input type=“password” class=“inputreg” placeholder=“Enter Password” name=“pswd”
                            id=“pswd” required>
                        <hr>                                <div style=“justify-content: space-between; display: flex”>
                            <button type=“submit”
                                style=“background-color: #008CBA
; cursor: pointer; height:35px; width:130px;“>Login</button>
                            <button type=“” class=“registerbtn bg-grey-300 rounded”
                                style=“background-color:slategrey” @click=“shown = false”>Cancel</button>
                        </div>
                    </div>                    </form>
        </div>
    </div>
 

    @livewireScripts
</body>
</html>