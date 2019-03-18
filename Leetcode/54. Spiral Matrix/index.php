<?php 
// https://leetcode.com/problems/spiral-matrix/

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        $dirMap = array(
            1 => array(1,0),
            2 => array(0,-1),
            -1 => array(-1,0),
            -2 => array(0,1)
        );
        $visitedMap = array();
        $i=0;
        $j=0;
        $dir = array(0,1); 
        $count = 0;
        $m = count($matrix); // rows
        $n = count($matrix[0]); //cols
        $size = $m*$n;
        $ret = array();
        while($count < $size) {
            array_push($ret, $matrix[$i][$j]);
            $visitedMap[$i*$n+$j] = 1;
            $newI = $i + $dir[0];
            $newJ = $j + $dir[1];
            if(array_key_exists($newI*$n+$newJ, $visitedMap) || $newI == $m || $newI<0 || $newJ == $n || $newJ <0) {
                $dir = $dirMap[2*$dir[0]+$dir[1]];
                $newI = $i + $dir[0];
                $newJ = $j + $dir[1];
            }
            $i = $newI;
            $j = $newJ;
            ++$count;
        }
        return $ret;
    }
}

?>