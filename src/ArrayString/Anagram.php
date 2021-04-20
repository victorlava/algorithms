<?php

namespace Algorithm\ArrayString;

class Anagram {


    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupWithStandardFunctions($strs)
    {
        /** The initial idea was to go through each of the letters
         *  in the word and calculate the byte or check sum. Then group words if sum is identical.
         * However, the sum using ord() didn't work quite well, because
         * there was a big chance of key collisions in the array, which meant some words
         * might be put together even if they don't have common letters.
         *
         * This works much better. We basically sort the letters alphabetically, for ex. eat => aet, ate => aet, tea => aet
         * and then if the sorted word matches we put them together in the same group.
         * Would be nice to implement sort, implode and str_split method myself and compare the performance, but let's leave this for later.
         */

        //TODO: test the performance with phpunit
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
print_R($test->groupWithStandardFunctions(["eat","tea","tan","ate","nat","bat"])); // [["bat"],["nat","tan"],["ate","eat","tea"]]





