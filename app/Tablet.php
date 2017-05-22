<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Tablet extends Model
{
  public function reviews() {
    return $this->hasMany('App\Review');
}
  public function stores() {
    return $this->belongsToMany('App\Store');
}
}
