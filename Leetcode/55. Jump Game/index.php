<?php 
// https://leetcode.com/problems/jump-game/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        //dp[$i] true if $i can be reached from 0
        $dp = array();
        $n = count($nums);
        $dp[0] = true;
        for($i = 1; $i < $n; ++$i) {
            $dp[$i] = false;
            for($j=$i-1; $j>=0 && !$dp[$i]; --$j) {
                if($j+$nums[$j]>= $i)
                    $dp[$i] = $dp[$j];
            }
        }
        return $dp[$n-1];
    }
}

?>