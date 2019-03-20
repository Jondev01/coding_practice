<?php 
// https://leetcode.com/problems/set-matrix-zeroes/

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {
        $foundZero = false;
        $m = count($matrix);
        if($m == 0)
            return $matrix;
        $n = count($matrix[0]);
        for($i=0; $i<$m; ++$i) {
            for($j=0; $j<$n; ++$j) {
                if($matrix[$i][$j] == 0) {
                    for($i1=0; $i1<$m; $i1++) {
                        if($matrix[$i1][$j] != 0)
                            $matrix[$i1][$j] = true;
                    }
                    for($j1=0; $j1<$n; $j1++) {
                        if($matrix[$i][$j1] != 0)
                            $matrix[$i][$j1] = true;
                    }
                }
            }
        }
        for($i=0; $i<$m; ++$i) {
            for($j=0; $j<$n; ++$j) {
                if($matrix[$i][$j] === true)
                    $matrix[$i][$j] = 0;
            }
        }
        return $matrix;
    }
}

?>