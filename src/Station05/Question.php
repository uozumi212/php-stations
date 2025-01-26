<?php

namespace Src\Station05;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $result = 0;

        foreach ($array as $value) {
            if ($value >= 8) {
                break;
            }
            if ($value % 4  > 2 ) {
                continue;
            } else {
                $result += $value;
                continue;
            }
        }

        return $result;
    }
}
