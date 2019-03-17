<?php
//https://leetcode.com/problems/first-missing-positive/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        $posMap = array();
        $length = count($nums);
        for($i=0; $i<$length; ++$i) {
            $posMap[$nums[$i]] = true;
        }
        for($i=1; $i<=count(array_keys($posMap))+1; $i++) {
            if(!array_key_exists($i,$posMap))
                return $i;
        }    
    }
}


?>