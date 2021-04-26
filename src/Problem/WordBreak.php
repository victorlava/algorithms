<?php

namespace Algorithm\ArrayString;

class WordBreak {

    function wordBreak(string $s, array $wordDict) {

        return false;
    }
}


$test = new WordBreak();
print_R($test->wordBreak('leetcode', ['leet', 'code'])); // true
//print_R($test->wordBreak('applepenapple', ['apple', 'pen'])); // true
//print_R($test->wordBreak('catsandog', ["cats","dog","sand","and","cat"])); // false
