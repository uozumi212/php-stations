<?php

namespace Src\Station08;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = [
            ['アザラシ', 'アライグマ'],
            ['ウサギ', 'ウシ', 'ウマ'],
            ['オオカミ', 'オットセイ'],
        ];

        array_splice($array, 2, 1);
        // $array[2] = ['イヌ', 'イルカ'];
        array_splice($array, 1, 0, [['イヌ', 'イルカ']]);
        print_r($array);
    }
}

(new Practice())->main();
