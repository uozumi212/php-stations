<?php

namespace Src\Station07;

class Question
{
    public function one(): array
    {
        $array1 = ['北海道' => 1, '東京都' => 13, '大阪府' => 'XX'];
        $array2 = ['広島県' => 34, '京都府' => 26];
        $array3 = ['京都府' => 'XX', '大阪府' => 27];

        $array_merge = array_merge($array1, $array3, $array2);

        return $array_merge;
    }

    public function two(): array
    {
        $firstNames = ['太郎', '次郎', '花子'];
        $lastNames = ['山田', '鈴木', '佐藤'];

        $fullNames = array_map(function ($lastName, $firstName) {
            return $lastName . $firstName;
        }, $lastNames, $firstNames);

        return $fullNames;
    }

    public function three(): array
    {
        $array = [
            ['name' => 'apple', 'price' => 140],
            ['name' => 'banana', 'price' => 200],
            ['name' => 'orange', 'price' => 120],
        ];

        $fruits = array_column($array, 'price', 'name');

        return $fruits;
    }
}
