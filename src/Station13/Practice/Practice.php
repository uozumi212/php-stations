<?php

namespace Src\Station13\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $dog = new Dog();
        echo $dog->active(); // 名前
    }
}

(new Practice)->main();
