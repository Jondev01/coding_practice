<?php 
// https://leetcode.com/problems/maximum-subarray/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $dp = array();
        $n = count($nums);
        $dp[0] = $nums[0];
        $max = $dp[0];
        for($i=1; $i<$n; ++$i) {
            $dp[$i] = max($nums[$i], $dp[$i-1]+$nums[$i]);
            if($dp[$i]>$max)
                $max = $dp[$i];
        }
        return $max;
    }
}


?>