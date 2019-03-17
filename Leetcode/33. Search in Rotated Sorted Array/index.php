<?php 
//https://leetcode.com/problems/search-in-rotated-sorted-array/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        if(count($nums) == 0)
            return -1;
        return $this->find($nums, $target, 0, count($nums)-1);
    }

    private function find(&$nums, &$target, $left, $right) {
        if($left ==  $right) {
            return $nums[$left] == $target ? $left : -1;
        }
        $index = floor(($left+$right)/2);
        if($nums[$left] <= $nums[$index] && $nums[$index] <= $nums[$right]) {
            if($target <= $nums[$index]) {
                return $this->find($nums, $target, $left, $index);
            }
            else {
                return $this->find($nums, $target, $index+1, $right); 
            }
        }
        else if($nums[$left] <= $nums[$index] && $nums[$index] >= $nums[$right]) {
            if($target <= $nums[$index] && $target >= $nums[$left])
                return $this->find($nums, $target, $left, $index);
            else
            return $this->find($nums, $target, $index+1, $right); 
        }
        else if($nums[$left] >= $nums[$index] && $nums[$index] <= $nums[$right]) {
            if($target>$nums[$index] && $target <= $nums[$right])
                return $this->find($nums, $target, $index+1, $right);
            else
                return $this->find($nums, $target, $left, $index);
        }
    }
}

?>