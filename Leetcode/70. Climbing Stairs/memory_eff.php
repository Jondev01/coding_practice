<?php 
// https://leetcode.com/problems/climbing-stairs/

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $first = 1;
        $second = 2;
        $temp = 0;
        if($n==1)
            return $first;
        if($n==2)
            return $second;
        for($i=3; $i<=$n; ++$i) {
            $temp = $second;
            $second = $first + $second;
            $first = $temp;
        }
        return $second;
    }
}


?>