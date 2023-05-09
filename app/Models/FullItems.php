<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FullItems extends Model
{
    protected $table = 'full_items';
    protected $fillable = ['name','price','category','filename','path','category_id'];
}
