<?php

namespace Algorithm\ArrayString;

class Palindrome {

    /* Given the string, check if it is a palindrome.
     * Palindrome is a string that doesn't changed
     * when reversed (it reads the same backward and forward).
     * */

    function checkPalindrome($inputString): bool
    {
        
        $b = 0;
        for($a = strlen($inputString) - 1; $a >= 0; $a--) {
            if($inputString[$a] !== $inputString[$b]) {
                return false;
            }
            $b++;
        }
        return true;
    }

}

$test = new Palindrome();
echo $test->checkPalindrome('decaf faced');









