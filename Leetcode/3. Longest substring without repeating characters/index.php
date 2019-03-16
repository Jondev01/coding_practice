<?php

class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function lengthOfLongestSubstring($s) {
        $length = strlen($s);
        $charMap = array();
        $startIndex = 0;
        $maxLength = 0;
        for($i=0; $i<$length; ++$i){
            if(array_key_exists($s[$i], $charMap)){
                $startIndex = max($charMap[$s[$i]]+1, $startIndex);
            }
            $charMap[$s[$i]] = $i;
            $maxLength = max($maxLength, $i-$startIndex+1);
        }
        return $maxLength;
    }
}

    $task = new Solution();
    $solution =  $task->lengthOfLongestSubstring("abcabcabc");
    var_dump($solution);
?>