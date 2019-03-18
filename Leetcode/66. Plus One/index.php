<?php 
//https://leetcode.com/problems/plus-one/

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $length = count($digits);
        $carry = 0;
        $digit = $digits[$length-1] +1;
        $carry = floor($digit/10);
        $digits[$length-1] = $digit%10;
        for($i=$length-2; $i>=0; --$i) {
            $digit = $digits[$i] + $carry;
            $carry = floor($digit/10);
            $digits[$i] = $digit%10;
        }
        if($carry > 0)
            array_unshift($digits, $carry);
        return $digits;
    }
}
?>