<?php

namespace Src\Station12\Question;

class Product
{
    public readonly int $originalPrice;
    // property はアクセス修飾子・型定義不問、__construct での定義でなくとも良い
    public function __construct(int $originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }
}
