<?php
//https://leetcode.com/problems/letter-combinations-of-a-phone-number/

class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    private $digitsMap = array(
        "2" => "abc",
        "3" => "def",
        "4" => "ghi",
        "5" => "jkl",
        "6" => "mno",
        "7" => "pqrs",
        "8" => "tuv",
        "9" => "wxyz"
    );

    function letterCombinations($digits) {
        return $this->appendAllCombinations($digits, "");
    }

    function appendAllCombinations($digits, $s){
        $retArray = array();
        $str = $this->digitsMap[$digits[0]];
        $length = strlen($str);
        if(strlen($digits) == 1){
            for($i = 0; $i < $length; ++$i){
                $char = $str[$i];
                array_push($retArray, $s.$char);
            }
        }
        else {
            for($i = 0; $i < $length; ++$i){
                $char = $str[$i];
                $combs = $this->appendAllCombinations(substr($digits,1), $s.$char);
                foreach($combs as $string){
                    array_push($retArray, $string);
                }
            }
        }
        return $retArray;
    }
}
$solution = new Solution();
var_dump($solution->letterCombinations("23"));

?>