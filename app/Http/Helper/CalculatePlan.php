<?php

namespace App\Http\Helper;

class CalculatePlan {

  public function noPlan($value, $time){
    return $value*$time;
  }

  public function plan($value, $time, $phone_care){
    if($time > $phone_care){
      $diff = $time - $phone_care;
      $perc = $value + $value * 10/100;
      return $diff * $perc;
    } else {
      return ' - ';
    }
  }
}
