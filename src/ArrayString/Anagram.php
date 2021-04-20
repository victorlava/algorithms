<?php

namespace Algorithm\ArrayString;

class Anagram {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupWithStandartFunctions($strs)
    {
        $words = [];

        for($i = 0; $i < count($strs); $i++) {
            $sortedWord = "";

            if($strs[$i]) { // if not empty, then split, sort and implode.
                $letters = str_split($strs[$i]); // splits string into an array
                sort($letters); // sort tea to aet
                $sortedWord = implode($letters); // makes string from an array
            }

            $words[$strs[$i]]['sorted'] = $sortedWord;
        }

        $groupedWords = [];

        foreach ($words as $key => $value) {
            $groupedWords[$value['sorted']][] = $key;
        }

        $result = [];
        $i = 0;
        foreach ($groupedWords as $word) {
            $result[$i] = $word;
            $i++;
        }

        return $result;
    }

}


$test = new Anagram();
print_R($test->groupWithStandartFunctions(["eat","tea","tan","ate","nat","bat"])); // [["bat"],["nat","tan"],["ate","eat","tea"]]





