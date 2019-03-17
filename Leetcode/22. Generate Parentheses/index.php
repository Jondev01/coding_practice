<?php 
// https://leetcode.com/problems/generate-parentheses/

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */

     private $allParens = array();
    function generateParenthesis($n) {
        $this->createParens($n,$n, "");
        return $allParens;
    }

    private function createParens($open,$closed,$str) {
        if($open == 0 && $closed==0) {
            array_push($allParens, $str);
        }
        if($open > 0) {
            $this->createParens($open-1, $closed, $str.'(');
        }
        if($closed > 0 && $closed > $open) {
            $this->createParens($open, $closed-1, $str.')');
        }
    }
}



?>