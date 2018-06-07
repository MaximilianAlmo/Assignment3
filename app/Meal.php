<?php

namespace App;
use App\Restaurant;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
  public function review()
  {
    return $this->hasOne('App\User');
  }
  public function restaurant()
  {
    return $this->belongsToMany('App\Restaurant');
  }
  public function getRating()
  {
    return $this->review->rating;
  }
}
