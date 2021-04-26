<?php

namespace Algorithm\ArrayString;

class NumberLetterCombination {

    /** @var string[]  */
    private $mapping;

    /** @var array  */
    private $combinations;

    /** @var string  */
    private $digits;

    public function __construct() {
        $this->mapping = [
            2 => "abc",
            3 => "def",
            4 => "ghi",
            5 => "jkl",
            6 => "mno",
            7 => "pqrs",
            8 => "tuv",
            9 => "wxyz"
        ];
        $this->digits = '';
        $this->combinations = [];
    }

    public function get(string $digits): array
    {
        $this->digits = $digits;

        if(strlen($this->digits) === 0 || $this->digits === '') {
            return [];
        }


        $this->backtracking(0, '');

        return $this->combinations;
    }


    public function backtracking(int $index, string $combination)
    {
        if($index === strlen($this->digits)) {
            $this->combinations[] = $combination;
            return;
        }

        $letters = $this->mapping[$this->digits[$index]];
        for($i = 0; $i < strlen($letters); $i++) {
            $this->backtracking($index + 1, $combination . $letters[$i]);
        }

    }

}


$test = new NumberLetterCombination();
print_R($test->get('2345'));
