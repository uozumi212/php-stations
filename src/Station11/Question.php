<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
        return $this->makeCombination($sweets, $keys);
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        return array_filter($sweets, function($sweet) use ($budget) {
            return $sweet['price'] <= 300;
        });
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $keys = array_keys($lessThanBudgetSweets);
        shuffle($keys);
        return array_slice($keys, 0, $budget);
    }

    private function makeCombination(array $sweets, array $keys)
    {
        $combination = [];
        foreach ($keys as $key) {
            $combination[] = $sweets[$key];
        }
        return $combination;
    }
}
        $sweets = [
            [
                'name' => '飴玉',
                'price' => '50'
            ],
            [
                'name' => '綿菓子',
                'price' => '300'
            ],
            [
                'name' => 'チョコレート',
                'price' => '88'
            ],
        ];
(new Question())->main($sweets);
