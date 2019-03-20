<?php 
// https://leetcode.com/problems/sort-colors/

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $zeroes = 0;
        $ones = 0;
        $n = count($nums);
        foreach($nums as $num){
            if($num == 0)
                    ++$zeroes;
            else if($num == 1)
                    ++$ones;
        }
        for($i = 0; $i<$zeroes; ++$i) {
            $nums[$i] = 0;
        }
        for($i = $zeroes; $i<$zeroes+$ones; ++$i) {
            $nums[$i] = 1;
        }
        for($i = $zeroes+$ones; $i<$n; ++$i) {
            $nums[$i] = 2;
        }
        
    }
}

?>