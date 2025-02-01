<?php

namespace Src\Station16\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 'test';
        echo gettype($a) . PHP_EOL;
    }
}

(new Practice)->main();
