<?php

namespace Src\Station07;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $array1 = [1, 2, 3];
        // $array2 = [4, 5];
        $array1 = [4, 5];
        $array2 = [1, 2, 3];

        $mergedArray = array_merge($array1, $array2);
        print_r($mergedArray);

        $array3 = ['apple' => 'red', 'banana' => 'yellow', 'rime' => 'green'];
        $array4 = ['strawberry' => 'pink', 'banana' => 'green'];

        $mergedArray2 = array_merge($array3, $array4);
        print_r($mergedArray2);
    }
}

(new Practice1())->main();
