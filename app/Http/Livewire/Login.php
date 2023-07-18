<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $login_submit=[
        'email'=>'',
        'password'=>''
    ];
    public function login_submit(){
        $this->validate([
            'login_submit.email'=>'required',
            'login_submit.password'=>'required',

        ]);

        if(Auth::attempt($this->login_submit))
        return redirect()->to('/a/1');
     
       


    }


    public function render()
    {
        return view('livewire.login');
    }
}

// $mysqli = new mysqli(SERVER, DBUSER, DBPASS, DATABASE);
// $result = $mysqli->query("SELECT id FROM mytable WHERE city = 'c7'");
// if($result->num_rows == 0) {
//      // row not found, do stuff...
// } else {
//     // do other stuff...
// }
// $mysqli->close();
