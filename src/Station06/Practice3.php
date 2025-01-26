<?php

namespace Src\Station06;

class Practice3
{
    public function main(): array
    {
        // ここにサンプルコードを記述
        // $array = [1, 2, 3, 4, 5];

        // array_pop($array);
        // print_r($array);
        // array_shift($array);
        // print_r($array);
        // array_splice($array, 2, 1);
        // print_r($array);
        // array_splice($array, 0, 3, [6, 7]);
        // print_r($array);
               $array = ['red', 'blue', 'yellow'];
        array_unshift($array, 'white', 'black');
                array_pop($array);
                        array_splice($array, 3, 0, 'green');

        return $array;
    }
}

(new Practice3())->main();
