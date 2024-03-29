<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['firstName','lastName','email','mobile','password','otp'] ;

    protected $attributes = [
        'otp' => '0'
    ];
    protected $hidden = ['password', 'otp'];


    public function Applications()
    {
        return $this->hasMany(Application::class);
    }
}
