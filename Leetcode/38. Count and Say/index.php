<?php 

//https://leetcode.com/problems/count-and-say/

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        if($n==1)
            return "1";
        $last = $this->countAndSay($n-1);
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
        return $res;
    }
}

?>