<?php

namespace Src\Station17\Question;

class Keyboard
{
  public function play(SoundInterface $sound, string $scale): void
  {
    $guitarSound = $sound->isValidatedInput($scale);
    // $guitarSound();
    if ($guitarSound === false) {
       echo 'この音を鳴らすことはできません';
    } else {
       echo  $sound->sound($scale) . 'を鳴らします';
    }
    // if (!$sound->isValidatedInput($scale)) {
    //   echo 'この音を鳴らすことはできません';
    //   return;
    // }
    // echo $sound->sound($scale) . 'を鳴らします';
  }
}
