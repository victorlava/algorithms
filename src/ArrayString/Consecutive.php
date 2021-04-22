<?php

namespace Algorithm\ArrayString;

/* Ratiorg got statues of different sizes as a present from CodeMaster for his birthday,
   each statue having an non-negative integer size. Since he likes to make things perfect,
   he wants to arrange them from smallest to largest so that each statue will be bigger
   than the previous one exactly by 1. He may need some additional statues to be able to
   accomplish that. Help him figure out the minimum number of additional statues needed.
*/
class Consecutive {

    // Basicly make array consecutive and tell
    // how much numbers we need to put do achieve that

    function makeArrayConsecutive($statues) {

        // Idea on how to solve this
        // 1. Sort the numbers in order
        // 2. Go through the numbers again
        // 3. Initialize two pointers
        // 4. Check if pointer2 is bigger than pointer1
        // 5. If it's bigger than 1 insert a new value between them

    }


}


$test = new Anagram();
print_R($test->makeArrayConsecutive([6, 2, 3, 8]); // returns 3, because we need to insert 4 5 7





