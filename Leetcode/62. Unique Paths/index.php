<?php 
// https://leetcode.com/problems/unique-paths/

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        //(m!)n!(m-n)!
        $dp = array();
        $dp[0] = 1;
        for($i = 0; $i<$m; ++$i){
            for($j=0; $j<$n; ++$j){
                if($i==0 && $j==0)
                    continue;
                $dp[$i*$n+$j] = 0;
                if($i>0)
                    $dp[$i*$n+$j]+= $dp[($i-1)*$n+$j];
                if($j>0)
                    $dp[$i*$n+$j] += $dp[$i*$n+$j-1];
            }
        }
        return $dp[$m*$n-1];
    }
}

?>