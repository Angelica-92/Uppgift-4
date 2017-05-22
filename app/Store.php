<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Store extends Model
{
  public function mobiles() {
    return $this->belongsToMany('App\Mobile');
}
  public function tablets() {
    return $this->belongsToMany('App\Tablet');
}
  public function computers() {
    return $this->belongsToMany('App\Computer');
}
}
