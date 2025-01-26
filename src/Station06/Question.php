<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'];
        array_unshift($array, 'white', 'black');
        array_pop($array);
        array_splice($array, 3, 0, 'green');

        return $array;
    }
}
