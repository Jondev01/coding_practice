<?php 
// https://leetcode.com/problems/valid-parentheses/

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    private $bracketsMap = array(
        '(' => 0,
        '{' => 1,
        '[' => 2,
        ')' => 3,
        '}' => 4,
        ']' => 5        
    );
    function isValid($s) {
        $stack = array();
        $length = strlen($s);
        for($i=0; $i<$length; ++$i){
            if($this->bracketsMap[$s[$i]] < 3)
                array_push($stack, $s[$i]);
            else {
                if(count($stack) > 0 && $this->bracketsMap[$stack[count($stack)-1]] == $this->bracketsMap[$s[$i]] - 3) {
                    array_pop($stack);
                }
                else {
                    return false;
                }
            }
        }
        return count($stack) == 0;
    }
}

$solution = new Solution();
var_dump($solution->isValid("()[]{}"));

?>