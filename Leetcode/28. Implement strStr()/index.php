<?php 
// https://leetcode.com/problems/implement-strstr/

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */

    function strStr($haystack, $needle) {
        $nLength = strlen($needle);
        $hLength = strlen($haystack);
        if($nLength == 0)
            return 0;
        for($i=0; $i<$hLength; ++$i){
            $substr = substr($haystack,$i, $nLength);
            if($substr == $needle) {
                return $i;
            }
        }
        return -1;
    }
}
$solution = new Solution();
var_dump($solution->strStr("mississippi","issippi"));

?>