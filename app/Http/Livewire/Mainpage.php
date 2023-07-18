<?php

namespace App\Http\Livewire;
use App\Http\Livewire\Home;

use Livewire\Component;

use App\Models\site_details;
 
          

class Mainpage extends Component
{

          public $site_name;
      
          public function mount(){
              $this->site_name=site_details::all();
          }
    public function render()
    {
        return view('livewire.mainpage');
    }
}
