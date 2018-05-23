<?php
namespace App;
use App\Review;
//use App\Store;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function review()
  {
      return $this->hasMany('App\Review');
  }
  public function store()
  {
      return $this->belongsToMany('App\Store');
  }
  public function getRating(){
      return $this->review->rating;
  }
}
