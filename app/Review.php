<?php

namespace App;
use App\Restaurant;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
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
