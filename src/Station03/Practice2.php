<?php

namespace Src\Station03;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 1;
        switch ($a) {
            case $a ==='1':
                echo '$aは stringの1です'. PHP_EOL;
                break;
            case $a === 1:
                echo '$aは intの1です'. PHP_EOL;
                break;
            default:
                echo '$aは1以外' . PHP_EOL;
        }
    }
}

(new Practice2())->main();
