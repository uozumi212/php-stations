<?php

namespace Src\Station10;

class Practice
{
    private function checkEvenOrOdd($number)
    {
        if ($number % 2 === 0) {
            echo $number . 'は偶数です';
        } else {
            echo $number . 'は奇数です';
        }
    }

    public function main(): void {
        $this->checkEvenOrOdd(10);
    }

        public function main2(string $animal): string
    {
        $result = $this->getAnimalName($animal);
        echo $result;
        return $result;
    }

    private function getAnimalName(string $animal): ?string
    {
        if ($animal === '猫') {
            return 'ミケ';
        } elseif ($animal === '犬') {
            return 'ポチ';
        } else {
            return 'わかりません';
        }
    }
}

// (new Practice())->main();
(new Practice())->main2('犬');
