<?php

namespace Src\Station07;

class Practice4
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $array = [
        //     ['id' => 1, 'name' => '太郎'],
        //     ['id' => 2, 'name' => '次郎'],
        //     ['id' => 3, 'name' => '花子'],
        // ];

        // // $array2 = array_column($array, 'id');
        // $array2 = array_column($array, 'name', 'id');
        // print_r($array2);
        // $array1 = ['北海道' => 1, '東京都' => 13, '大阪府' => 'XX'];
        // $array2 = ['広島県' => 34, '京都府' => 26];
        // $array3 = ['京都府' => 'XX', '大阪府' => 27];

        // $array_merge = array_merge($array1, $array3, $array2);
        // print_r($array_merge);
        // $firstNames = ['太郎', '次郎', '花子'];
        // $lastNames = ['山田', '鈴木', '佐藤'];

        // $fullNames = array_map(function ($lastName, $firstName) {
        //     return $lastName . $firstName;
        // }, $lastNames, $firstNames);

        // print_r($fullNames);

        $array = [
            ['name' => 'apple', 'price' => 140],
            ['name' => 'banana', 'price' => 200],
            ['name' => 'orange', 'price' => 120],
        ];

        $prices = array_column($array, 'price' , 'name');
        print_r($prices);
    }
}

(new Practice4())->main();
