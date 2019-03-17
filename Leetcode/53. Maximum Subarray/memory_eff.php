<?php 
// https://leetcode.com/problems/maximum-subarray/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $n = count($nums);
        $prev = $nums[0];
        $max = $prev;
        for($i=1; $i<$n; ++$i) {
            $prev = max($nums[$i], $prev+$nums[$i]);
            if($prev>$max)
                $max = $prev;
        }
        return $max;
    }
}


?>