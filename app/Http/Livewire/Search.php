<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product;

class Search extends Component
{
    public $products;
    // public $search='t-shirt';

    public function mount(){
    $this->products = product::all();
    }

    public function search(){
        $this->products = product::where('id', 'like',1)->get();
        }

       

    public function render()
    {
        return view('livewire.search', [
            'products' => $this->products,
        ]);
    }
}
