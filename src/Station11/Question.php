<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);

        $count = min(count($lessThanBudgetSweets), 3);
        $keys = $this->getRandomKeys($lessThanBudgetSweets, $count);

        $selectedSweets = $this->makeCombination($lessThanBudgetSweets, $keys);
            // $totalPrice = array_sum(array_column($selectedSweets, 'price'));


        return $selectedSweets;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $filtered = array_filter($sweets, function($sweet) use ($budget) {
            return $sweet['price'] <= $budget;
        });

        return array_values($filtered);
    }

    private function getRandomKeys(array $array, int $count)
    {
        $budget = 300;
        $keys = array_keys($array);
        // shuffle($keys);
        $selectedKeys = [];
        $currentTotal = 0;

        foreach ($keys as $key) {
            if ($currentTotal + $array[$key]['price'] <= $budget && count($selectedKeys) < $count) {
                $selectedKeys[] = $key;
                $currentTotal += $array[$key]['price'];
            }
            if (count($selectedKeys) >= $count) {
                break;
            }
        }
        // print_r($currentTotal);
        shuffle($selectedKeys);
        print_r($selectedKeys);
        // return array_slice($keys, 0, 3);
        return $selectedKeys;
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
		                'price' => '60'
		            ],
		            [
		                'name' => 'チョコレート',
		                'price' => '80'
		            ],
		            [
		                'name' => 'ドーナツ',
		                'price' => '120'
		            ],
		            [
		                'name' => 'キャラメル',
		                'price' => '180'
		            ],
		            [
		                'name' => 'ラムネ',
		                'price' => '90'
		            ],
		            [
		                'name' => 'クッキー缶',
		                'price' => '299'
		            ],

		        ];

// (new Question())->main($sweets);
$question = new Question();
$result = $question->main($sweets);
print_r($result);
