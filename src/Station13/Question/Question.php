<?php

namespace Src\Station13\Question;

require_once('vendor/autoload.php');

class Question
{

    public function main(): void
    {
        // ここにコードを記述
        $car = new Car();
        $car->turnRight();
        $car->backLeft();
    }
}
// (new Question)->main();
