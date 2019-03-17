<?php 
// https://leetcode.com/problems/find-first-and-last-position-of-element-in-sorted-array/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $length = count($nums);
        if($length == 0)
            return array(-1,-1);
        return array(
            $this->findLow($nums, $target, 0, $length-1),
            $this->findHigh($nums, $target, 0, $length-1)
        );
    }
    private function findLow(&$nums, &$target, $left, $right) {
        if($left == $right) {
            return $target == $nums[$left] ? $left : -1;
        }
        if($left > $right)
            return -1;
        $mid = floor(($left+$right)/2);
        if($target == $nums[$mid]) {
            $temp = $this->findLow($nums, $target, $left, $mid);
            return $temp > -1 && $temp < $mid ? $temp : $mid;
        }
        if($target < $nums[$mid])
            return $this->findLow($nums, $target, $left, $mid-1);
        else 
            return $this->findLow($nums, $target, $mid+1, $right);
    }

    private function findHigh(&$nums, &$target, $left, $right) {
        if($left == $right) {
            return $target == $nums[$left] ? $left : -1;
        }
        if($left > $right)
            return -1;
        $mid = floor(($left+$right)/2);
        if($target == $nums[$mid]){
            $temp = $this->findHigh($nums, $target, $mid+1, $right);
            return  $temp > $mid ? $temp : $mid;
        }
        if($target < $nums[$mid])
            return $this->findHigh($nums, $target, $left, $mid);
        else 
            return $this->findHigh($nums, $target, $mid+1, $right);
    }
}

$solution = new Solution();
$arr = array(1,2,3,3,4);
var_dump($solution->searchRange($arr,3));

?>