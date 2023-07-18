<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $register_form=[
        'name'=>'',
        'email'=>'',
        'password'=>'',
       
    ];

    public function submit(){
   
    // if($this->register_form['password']==$this->register_form['repassword']){
    //    User::create()
    //    return redirect('/');
    // }else{
    //      dd('not match');

    // }
    $this->validate([
        'register_form.name'=>'required',
        'register_form.email'=>'required',
        'register_form.password'=>'required',

    ]);
       if(User::create($this->register_form));
       return redirect()->to('/a/1');
         
    }
    public function render()
    {
        return view('livewire.register');
    }
}
