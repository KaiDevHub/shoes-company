<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    public $table = 'staff';
    protected $fillable = [
        'firstName', 'lastName', 'staffSalary', 'phone_number', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}