<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Computer extends Model
{
  public function reviews() {
    return $this->hasMany('App\Review');
}
  public function stores() {
    return $this->belongsToMany('App\Store');
}
}
