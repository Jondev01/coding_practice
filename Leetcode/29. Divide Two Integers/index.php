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
        $res = 0;
        $number = 0;
        if($divisor == 1)
            return $dividend;
        if($divisor == -1)
            return -$dividend;
        if(($dividend >= 0 && $divisor > 0) || $divided <= 0 && $divisor <0) {
            while($number < $dividend) {
                $number += $divisor;
                ++$res; 
            }
            if($res > 0)
                $res -= 1;
            return $res > $this->INT_MAX ? $this->INT_MAX : $res;
        }
        else {
            while($number > $dividend) {
                $number -= $divisor;
                --$res; 
            }
            if($res < 0)
                $res += 1;
            return $res < -$this->INT_MAX-1 ? -$this->INT_MAX-1 : $res;
        }

    }
}



?>