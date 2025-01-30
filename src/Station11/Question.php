<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        $maxAttempts = 5;
        $attempts = 0;

        do {
            $keys = $this->getRandomKeys($lessThanBudgetSweets, 3);

            $selectedSweets = $this->makeCombination($lessThanBudgetSweets, $keys);
            $totalPrice = array_sum(array_column($selectedSweets, 'price'));
            $attempts++;
            if ($attempts >= $maxAttempts) {
                $keys = array_slice(array_keys($lessThanBudgetSweets), 0, 3);
                return $this->makeCombination($lessThanBudgetSweets, $keys);
            }
        } while ($totalPrice >= $budget);

        return $selectedSweets;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $filtered = array_filter($sweets, function($sweet) use ($budget) {
            return $sweet['price'] <= $budget;
        });

        return $filtered;
    }

    private function getRandomKeys(array $array, int $count)
    {
        $keys = array_keys($array);

        usort($keys, function ($a, $b) use ($array) {
            return $array[$a]['price'] <=> $array[$b]['price'];
        });

        shuffle($keys);
        return array_slice($keys, 0, $count);
    }

    private function makeCombination(array $sweets, array $keys)
    {
        $combination = [];
        foreach ($keys as $key) {
            $combination[] = $sweets[$key];
        }

        // var_dump($combination);
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

// (new Question())->main($sweets);
$question = new Question();
$result = $question->main($sweets);
print_r($result);
