<?php 
// https://leetcode.com/problems/roman-to-integer/

class Solution {

    /**
     * @param String $s
     * @return Integer
     */

     private $symbolMap = array (
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
     );

    function romanToInt($s) {
        $length = strlen($s);
        $number = 0;
        for($i=0; $i<$length; ++$i) {
            if( $i < $length-1 && $this->symbolMap[$s[$i]] < $this->symbolMap[$s[$i+1]]) {
                $number -= $this->symbolMap[$s[$i]];
            }
            else {
                $number += $this->symbolMap[$s[$i]];
            }
        }
        return $number;
    }
}
$solution = new Solution();
var_dump($solution->romanToInt("MCMXCIV"));
?>