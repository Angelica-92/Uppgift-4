<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
  public function products() {
    return $this->belongsToMany('App\Mobile');
}
  public function products() {
    return $this->belongsToMany('App\Tablet');
}
  public function products() {
    return $this->belongsToMany('App\Tablet');
}
}