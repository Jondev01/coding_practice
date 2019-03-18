<?php 
// https://leetcode.com/problems/sqrtx/

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $a = $x;
        while(floor($a*$a) > $x) {
            $a  =  ($a+$x/$a)/2;
        }
        return floor($a);
    }
}

?>