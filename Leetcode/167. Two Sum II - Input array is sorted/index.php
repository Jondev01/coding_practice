<?php 
// https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $i=0;
        $j =  count($numbers)-1;
        while($j>$i) {
            $sum = $numbers[$i] + $numbers[$j];
            if($sum == $target)
                return array($i+1,$j+1);
            else if($sum > $target)
                --$j;
            else 
                ++$i;
        }
        
    }
}

?>