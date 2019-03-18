<?php 
//https://leetcode.com/problems/group-anagrams/

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $groupMap = array();
        foreach($strs as $i => $str) {
            $arr = str_split($str);
            sort($arr);
            $sortedString = implode('',$arr);
            if(array_key_exists($sortedString, $groupMap))
                array_push($groupMap[$sortedString], $str);
            else 
                $groupMap[$sortedString] = array($str);
        }
        $ret = array();
        foreach($groupMap as $group)
            array_push($ret, $group);
        return $ret;
    }
}

?>