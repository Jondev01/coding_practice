<?php 
// https://leetcode.com/problems/string-to-integer-atoi/

class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    private $INT_MAX = 2147483647;
    private $INT_MIN = -2147483648;
    function myAtoi($str) {
        $length = strlen($str);
        $pos = 0;
        $digitArray = array();
        $sign = 1;
        while($str[$pos] == ' ') {
            $pos += 1;
        }

        if($str[$pos] == '-') {
            $sign = -1;
            $pos++;
        }
        else if($str[$pos] == '+') {
            $pos++;
        }

        while( $pos < $length && is_numeric($str[$pos])) {
            array_push($digitArray, $str[$pos]);
            $pos++;
        }

        if(count($digitArray)>0) {
            $numberOfDigits = count($digitArray);
            $number = 0;
            $factor = 1;
            for($j=$numberOfDigits-1; $j>=0; $j--) {
                $number += $factor*($digitArray[$j]); 
                $factor *= 10;
            }
            if($sign>0 && $number> $this->INT_MAX)
                return $this->INT_MAX;
            else if($sign<0 && $number > abs($this->INT_MIN))
                return $this->INT_MIN;
            return $sign*$number;
        }
        return 0;
    }
}
var_dump(is_numeric('-'));
$solution = new Solution();
var_dump($solution->myAtoi("-42"));

?>