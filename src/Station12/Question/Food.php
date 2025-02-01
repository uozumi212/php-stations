<?php

namespace Src\Station12\Question;
use Carbon\CarbonImmutable;

class Food extends Product
{
    public CarbonImmutable $useByDate;
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    public function __construct(int $originalPrice, CarbonImmutable $useByDate) {
        parent::__construct($originalPrice);
        $this->useByDate = $useByDate;
    }
    public function price(): int
    {
        $currentTime = CarbonImmutable::now();
        if ($this->useByDate->subHours(5)->isBefore($currentTime)) {
            return (int) ($this->originalPrice / 2);
        }
        return $this->originalPrice;
    }
}
