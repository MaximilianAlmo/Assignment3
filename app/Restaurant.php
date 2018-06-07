<?php

namespace App;
use App\Meal;
use App\Review;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
  public function meal()
  {
    return $this->hasMany('App\Meal');
  }
  public function review()
  {
    return $this->belongsToMany('App\Review', 'review_restaurant', 'review_id' , 'restaurant_id');
  }
  public function getRating()
  {
    return $this->review->rating;
  }
}
