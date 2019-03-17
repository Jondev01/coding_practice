<?php 
// https://leetcode.com/problems/divide-two-integers/

class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    private $INT_MAX = 2147483647;
    function divide($dividend, $divisor) {
        if($divisor == -1 && $dividend == -$this->INT_MAX-1)
            return $this->INT_MAX;
        $sign = -1;
        if(($dividend >=0 && $divisor>0) || ($dividend <=0 && $divisor<0))
            $sign = 1;
        $numerator = abs($dividend);
        $denominator = abs($divisor);
        $res = 0;
        while($numerator >= $denominator) {
            $sub = $denominator;
            $count = 1;
            while($sub << 1 <= $numerator) {
                $sub <<= 1;
                $count <<= 1;
            }
            $numerator -= $sub;
            $ans += $count;
        }
        return $sign*$ans; 
    }
}



?>