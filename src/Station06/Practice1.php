<?php

namespace Src\Station06;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $array = [1, 2, 3];
        // print_r($array[0]);

        // $array = ['red' => 1, 'blue' => 2, 'green' => 3];
        // print_r($array);
        $array = ['red' => 1, 'blue' => 2, 'green' => 3];
        print_r($array['red']);
    }
}

(new Practice1())->main();
