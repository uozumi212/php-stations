<?php

namespace Src\Station03;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $a = 'foo';

        // switch ($a) {
        //   case 'foo';
        //     echo '$aはfoo' . PHP_EOL;
        //     break;
        //   default:
        //     echo '$aはfoo以外' . PHP_EOL;
        // }

        $a = 'bar';
        switch ($a) {
            case 'foo':
                echo '$aはfoo' . PHP_EOL;
                break;
            case 'bar':
            case 'baz':
                echo '$aはbarまたはbaz' . PHP_EOL;
            default:
                echo '$aはfoo, baz 以外' . PHP_EOL;
        }
    }
}

(new Practice1())->main();
