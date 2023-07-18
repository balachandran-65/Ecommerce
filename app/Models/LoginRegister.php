<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginRegister extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_name','user_email','user_password'
    ];
    
    public function setpasswordAttribute($value){
        $this->attribute['password']=bcrypt($value);
    }
}
