<?php
//https://leetcode.com/problems/3sum/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $memo = array();
        $length = count($nums);
        for($i=0; $i<$length; ++$i) {
            if(!array_key_exists($nums[$i], $memo)){
                $twoSumArray = $this->twoSum($nums, -$nums[$i], $i);
                $pushArray = array();
                foreach($twoSumArray as $k => $v){
                    if(count($v)>0){
                        if(!array_key_exists($nums[$v[0]], $memo) && !array_key_exists($nums[$v[1]], $memo)){
                            array_push($pushArray, $v);
                        }
                    }
                }
                $memo[$nums[$i]] = $pushArray;
            }
        }
        $retArray = array();
        foreach($memo as $num => $twoNumberArrays) {
            foreach($twoNumberArrays as $k => $v)
            if(count($v)>0) {
                array_push($retArray, array($num, $nums[$v[0]], $nums[$v[1]]));
            }
        }
        return $retArray;
    }

    //Returns array of unique pair of indices in $nums with sum $sum
    public function twoSum($nums, $sum, $index) {
        $map = array();
        $alreadyUsed = array();
        $length = count($nums);
        $retArray = array();
        for($i=0; $i<$length; ++$i) {
            if($i == $index)
                continue;
            if(array_key_exists($sum-$nums[$i], $map) && !array_key_exists($nums[$i], $alreadyUsed)) {
                array_push($retArray, array($i, $map[$sum-$nums[$i]]));
                $alreadyUsed[$nums[$i]] = true;
                $alreadyUsed[$sum-$nums[$i]] = true;
            }
            $map[$nums[$i]] = $i;
        }
        return $retArray;
    }
}

$solution = new Solution();
echo var_dump($solution->threeSum(array(-1,0,1,2,-1,-4)));
?>