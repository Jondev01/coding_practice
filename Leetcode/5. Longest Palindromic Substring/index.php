<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $length = strlen($s);
        $start = 0;
        $maxLength = 0;
        for($i=0; $i<$length; ++$i){
            $this->createPalindrome($s, $i, $i, $start, $maxLength);
            $this->createPalindrome($s, $i, $i+1, $start, $maxLength);
        }
        return substr($s, $start, $maxLength);
    }

    function createPalindrome($s, $left, $right, &$start, &$maxLength){
        $length = strlen($s);
        while($left >= 0 && $right <= $length-1 && $s[$left] == $s[$right]){
            $left--;
            $right++;
        }
        if($right-$left-1 >$maxLength){
            $start = $left+1;
            $maxLength = $right-$left-1;
            echo "$start";
        }
    }
}

$solution = new Solution();
var_dump($solution->longestPalindrome("cbbd"));
?>