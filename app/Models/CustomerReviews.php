<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerReviews extends Model
{
    use HasFactory;
    protected $table = "customer_reviews";
    protected $fillable = ['user_id','rating','review'];


 /**
  * Get the user associated with the CustomerReviews
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasOne
  */
 public function user(): HasOne
 {
     return $this->hasOne(Registration::class,'id' ,'user_id');
 }


}

