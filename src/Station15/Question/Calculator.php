<?php

namespace Src\Station15\Question;

class Calculator {

  public const multiplieds = [1, 2, 3];
  public const multiplier = 2;

  public function multiply($multiplieds, $multiplier)
  {
    if (empty($multiplieds)) {
      return false;
    } else {
       return array_map(function($element) use ($multiplier){
         return $element * $multiplier;
       }, $multiplieds);
    }
    // return $multiplieds * $multiplier;
  }
}
