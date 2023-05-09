<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','phoneno','email','password','address','sex','date','roles','filename','path'];
}
