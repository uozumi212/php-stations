<?php

namespace Src\Station15\Question;
require_once('vendor/autoload.php');

class Question
{
    public function main($multiplieds, $multiplier): array
    {
        $calculator = new Calculator();
        $result = $calculator->multiply($multiplieds, $multiplier);
        return $result;
    }
}
// (new Question)->main();//
