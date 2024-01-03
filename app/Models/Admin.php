<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'admin_id',
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'gender',
        'date_of_birth',
        'password',
        'image',
        'block',
        'online_list',
    ];
}
