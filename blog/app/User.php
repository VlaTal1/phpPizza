<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'surname', 'email', 'phone', 'password', 'sale', 'ordersAmount'
    ];

    protected $hidden = [
        'password', 'remember_token', 'is_admin'
    ];
    public function isAdmin()
    {
        return $this->is_admin; 
    }
}
