<?php 
// https://leetcode.com/problems/longest-common-prefix/

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(count($strs) == 0)
            return "";
        $prefix = "";
        $min = 10000;
        foreach($strs as $str) {
            $temp = strlen($str);
            if($temp < $min) {
                $min = $temp;
            }
        }
        if($min == 0)
            return "";
        for($i=0; $i<$min; ++$i) {
            $char = $strs[0][$i];
            foreach($strs as $str) {
                if($str[$i] != $char)
                    return $prefix;
            }
            $prefix = $prefix.$char;
        }
        return $prefix;
    }
}

$solution = new Solution();
$arr = array("flower", "flow", "flight");
var_dump($solution->longestCommonPrefix($arr));

?>