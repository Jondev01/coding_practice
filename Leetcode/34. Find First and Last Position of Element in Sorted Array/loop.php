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
        $low = $this->findLow($nums, $target, 0, $length-1);
        $high = $this->findHigh($nums, $target, max(0,$low), $length-1);
        return array($low, $high);
    }
    private function findLow(&$nums, &$target, $left, $right) {
        $ans = -1;
        while($left <= $right){
            if($left == $right) {
                return $target == $nums[$left] ? $left : $ans;
            }
            $mid = floor(($left+$right)/2);
            if($target == $nums[$mid]) {
                $ans = $mid;
                $right = $mid;
            }
            else if($target < $nums[$mid])
                $right = $mid-1;
            else 
                $left = $mid+1;
        }
        return $ans;
    }

    private function findHigh(&$nums, &$target, $left, $right) {
        $ans = -1;
        while($left <= $right){
            if($left == $right) {
                return $target == $nums[$left] ? $left : $ans;
            }
            $mid = floor(($left+$right+1)/2);
            if($target == $nums[$mid]) {
                $ans = $mid;
                $left = $mid;
            }
            else if($target < $nums[$mid])
                $right = $mid-1;
            else 
                $left = $mid+1;
        }
        return $ans;
    }
}

$solution = new Solution();
$arr = array(1,2,3,3,4);
var_dump($solution->searchRange($arr,3));

?>