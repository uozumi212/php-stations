<?php

namespace Src\Station16\Question;

// require_once('vendor/autoload.php');


class Question
{
    public function main(string $humanName, string $carName, int $passengers): void
    {
        $human = new Human($humanName);
        $car = new Car($carName);

        $human->buyCar($car);
        $car->run();
        echo $car->pickup($passengers);
    }
}
