<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\site_details;
class Tickets extends Component
{
    
    public $site_logo;

    public function mount(){
        $this->site_logo=site_details::all();
    }


    public function render()
    {
        return view('livewire.tickets');
    }
}
