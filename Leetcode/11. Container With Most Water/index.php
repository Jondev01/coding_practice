<?php 
//https://leetcode.com/problems/container-with-most-water/

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $length = count($height);
        $left = 0;
        $right = $length -1;
        $area = min($height[$left], $height[$right])*($right-$left);
        while($right != $left) {
            $temp = 0;
            if($height[$left] > $height[$right]) {
                $temp = $height[$right]*($right-$left);
                $right--;
            }
            else {
                $temp = $height[$left]*($right-$left);
                $left++;
            }
            if($temp > $area) {
                $area = $temp;
            }
        }
        return $area;
        
    }
}


?>