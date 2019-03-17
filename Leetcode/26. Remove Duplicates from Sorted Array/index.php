<?php 
// https://leetcode.com/problems/remove-duplicates-from-sorted-array/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $index = 0;
        $length = count($nums);
        for($j = 1; $j<$length; ++$j) {
            if($nums[$index] != $nums[$j]) {
                $nums[$index+1] = $nums[$j];
                ++$index;
            }
        }
        return $index+1;
    }
}

?>