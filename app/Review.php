<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
  public function mobile() {
    return $this->hasOne('App\Mobile');
}
  public function tablet() {
    return $this->hasOne('App\Tablet');
}
  public function computer() {
    return $this->hasOne('App\Computer');
}
}
