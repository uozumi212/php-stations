<?php

namespace Src\Station02;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $a = 1;
        // $b = 2;

        // if ($a > 1) {
        //     echo '$aは1より大きい';
        // } else {
        //     echo '$aは1より小さい';
        // }

        // echo PHP_EOL;

        // if ($a >= $b) {
        //     echo '$aは$b以上';
        // } else {
        //     echo '$aは$b未満';
        // }

        // echo PHP_EOL;

        // if ($a === $b) {
        //     echo '$aは$bと同値';
        // } else {
        //     echo '$aは$bと異なる';
        // }

        // echo PHP_EOL;

        $a = 1;
        $b = '1';

        if ($a == $b) {
            echo '$aは$bと同値'. PHP_EOL;
        } else {
            echo '$aは$bと異なる'. PHP_EOL;
        }
    }
}

(new Practice())->main();
