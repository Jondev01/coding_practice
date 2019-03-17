<?php 

//https://leetcode.com/problems/count-and-say/

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        $dp = array();
        $dp[1] = "1";
        for($i=2; $i<=$n; ++$i) {
            $last = $dp[$i-1];
            $length = strlen($last);
            $res = "";
            for($curPos = 0; $curPos <$length; ++$curPos){
                $curChar = $last[$curPos];
                $count = 0;
                while($curChar == $last[$curPos]) {
                    $count++;
                    $curPos++;
                }
                $res .= "$count".$curChar;
                $curPos--;
            }
            $dp[$i] = $res;
        }
        return $dp[$n];
    }
}

?>