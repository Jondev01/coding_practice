<?php 
// https://leetcode.com/problems/permutations/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    private $numbers = array();
    function permute($nums) {
        $n = count($nums);
        if($n == 0)
            return array(array());
        if($n == 1)
            return array(array($nums[0]));
        $this->numbers = $nums;
        return $this->generatePermutations($n);
    }
    private function generatePermutations($n) {
        if($n == 1)
            return array(array($this->numbers[0]));
        $retArray = array();
        $lastPermutations = $this->generatePermutations($n-1);
        $last = $this->numbers[$n-1];
        foreach($lastPermutations as $permutation){
            for($i=0; $i<$n; ++$i){
                array_push($retArray, $this->insert($permutation, $i, $last));
            }
        }
        return $retArray;
    }
    
    private function insert($arr, $pos, $el) {
        $n = count($arr);
        $ret = array();
        $pushed = 0;
        for($i=0; $i<=$n; ++$i) {
            if($i == $pos){
                array_push($ret, $el);
                ++$pushed;
            }
            else
                array_push($ret, $arr[$i-$pushed]);
        }
        return $ret;
    }
}

?>