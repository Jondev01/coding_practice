<?php 
//https://leetcode.com/problems/group-anagrams/

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $ordered = array();
        foreach($strs as $i => $str) {
            $arr = str_split($str);
            sort($arr);
            $ordered[$i] = implode('',$arr);
        }
        asort($ordered);
        $ret = array();
        $group = array();
        $last = 1;
        foreach($ordered as $key => $str) {
            if($last == $str)
                array_push($group, $strs[$key]);
            else {
                if(count($group) >0) {
                    array_push($ret, $group);
                    $group = array();
                }
                array_push($group, $strs[$key]);
                $last = $str;
            }
        }
        if(count($group)>0)
            array_push($ret, $group);
        return $ret;
    }
}

?>