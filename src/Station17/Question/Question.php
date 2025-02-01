<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $keyboard = new Keyboard();

        $pianoSound = new PianoSound();
        $keyboard->play($pianoSound, 'ド');

        $guitarSound = new GuitarSound();
        echo $keyboard->play($guitarSound, 'C');
    }
}
