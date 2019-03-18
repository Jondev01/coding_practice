<?php 
// https://leetcode.com/problems/climbing-stairs/

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $dp = array();
        $dp[0] = 0;
        $dp[1] = 1;
        for($i=2; $i<=$n; ++$i) {
            $dp[$i] = $dp[$i-2] + $dp[$i-1];
        }
        return $dp[$n];
    }
}


?>