<?php

namespace Src\Station11;

class Practice
{
    /**
     * 4 人(man:2, woman:2)で 1 組の計 3 チームを作成して出力する
     * - 生徒の人数は 12 人(man:6, woman:6)で固定であり、生徒が余ることはない
     * - 出席番号が連番になっている同性の生徒は別チームに所属する
     */
    // public function main($students)
    // {
    //     [$men, $women] = $this->separatedByGender($students); //
    //     $teams = $this->createMixedTeam($men, $women);

    //     print_r($teams);
    // }

    // private function createMixedTeam($men, $women) {
    //     $teams = [[], [], []];
    //     foreach ($men as $key => $man) {
    //         $teams[$key%3][] = $man;
    //     }
    //     foreach ($women as $key => $woman) {
    //         $teams[$key%3][] = $woman;
    //     }
    //     return $teams;
    // }

    // private function separatedByGender($students) {
    //     $men = [];
    //     $women = [];
    //     foreach ($students as $student) {
    //         switch ($student['gender']) {
    //         case 'man':
    //             $men[] = $student;
    //             break;
    //         case 'woman':
    //             $women[] = $student;
    //             break;
    //         }
    //     }
    //     return [$men, $women];
    // }
        public function main(array $sweets, int $budget): array
    {
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
        $result = $this->makeCombination($sweets, $keys);
        print_r($result);
        return $result;
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
        $budget = 300;
        $practice = new Practice();
        $result = $practice->main($sweets, $budget);
        print_r($result);

// $students = [
//     ['id' => 1, 'gender' => 'man'],
//     ['id' => 2, 'gender' => 'man'],
//     ['id' => 3, 'gender' => 'woman'],
//     ['id' => 4, 'gender' => 'man'],
//     ['id' => 5, 'gender' => 'woman'],
//     ['id' => 6, 'gender' => 'man'],
//     ['id' => 7, 'gender' => 'woman'],
//     ['id' => 8, 'gender' => 'woman'],
//     ['id' => 9, 'gender' => 'woman'],
//     ['id' => 10, 'gender' => 'man'],
//     ['id' => 11, 'gender' => 'man'],
//     ['id' => 12, 'gender' => 'woman'],
// ];
// (new Practice())->main($students);
