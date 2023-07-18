<div>
    <h1>html code written page</h1>

    <form class="m-10" wire:submit.prevent="addfun">
        @error('val')<span class="text-red-800">{{$report}}</span>@enderror
            <div>
            @if(session()->has('skmessage'))
            <div class="bg-green-500  text-white p-3">
                {{session('skmessage')}}
            </div>
            @endif
        </div>
        {{-- <h1 wire:model="report">{{$report}}</h1> --}}
        <div class="row">
        
            <input class="border"type="text" wire:model.lazy="val"  >
            <button class="bg-gray-300"type="submit" wire:click="addfun">add</button><span wire:model.lazy="requir" ></span>
             
        </div>
        @foreach($comments as $c)
        <div class="row_2 border-2 mt-10">
             <div class="flex gap-3"> 
                <p>{{$c->id}}</p> 
                <p wire:click="remove({{$c->id}})">{{$c->created_at->diffForHumans()}}</p>
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg> --}}
                <!-- @foreach( $c as $value)
                <div>{{$value}}</div>
                @endforeach -->

            </div>
            <p >{{$c->product_name}} {{$c->creator->category_name}}</p>
            
        </div>
        @endforeach 
    </form>   
    <div wire:model="comments"></div>
</div> 
