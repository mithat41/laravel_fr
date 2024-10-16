<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Model extends Model
{
    use HasFactory;
    protected $table = '_user_model';
    protected $fillable = [
        'username',
        'email',
        'password',
        'conf_password',
        'address',
        'image'
    ];
}
