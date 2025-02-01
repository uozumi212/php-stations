<?php

namespace Src\Station12\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $dog = new Dog();
        // $dog->eat();

        // $bird = new Bird();
        // $bird->fly();
        // echo $bird->type;
        $bird = new Bird('parrot');
        echo $bird->type;
    }
}

(new Practice())->main();
