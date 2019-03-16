<?php
// https://leetcode.com/problems/reverse-integer/
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if($x == 0)
            return $x;
        $num = abs($x);
        $sign = $x<0 ? -1 : 1;
        $digits = array();
        while($num>0){
            array_push($digits, $num%10);
            $num = floor($num/10);
        }
        $reversedNum = 0;
        $factor = 1;
        for($i = count($digits)-1; $i>=0; --$i) {
            $reversedNum += $digits[$i]*$factor;
            $factor*= 10;
        }
        if(($sign>0 && $reversedNum > 2147483648-1) || ($sign<0 && $reversedNum >2147483648))
            return 0;
        return $sign*$reversedNum;
    }
}


?>