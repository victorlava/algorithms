<?php

namespace Algorithm\ArrayString;

class Palindrome {

    /* Given the string, check if it is a palindrome.
     * Palindrome is a string that doesn't changed
     * when reversed (it reads the same backward and forward).
     * */

    function checkPalindrome($inputString): bool
    {
        /*
         * Initialize two pointers and start from the string end.
         * The first pointer starts from the string end and is decremented,
         * the second pointer start from the beginning and is incremented.
         * Then with a simple if condition we check if both characters match on a left and right sides.
         * If all chars matched then it's a palindrome.
         */

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









