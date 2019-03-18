<?php
// https://leetcode.com/problems/rotate-image/

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);
        $valueMap = array();
        for($i = 0; $i<$n; ++$i) {
            for($j=0; $j<$n; ++$j) {
                $newIndices = $this->getRotatedIndices($n, $i, $j);
                $valueMap[$newIndices[1]*$n + $newIndices[0]] = $matrix[$newIndices[0]][$newIndices[1]];
                if(array_key_exists($j*$n+$i, $valueMap)) {
                    $matrix[$newIndices[0]][$newIndices[1]] = $valueMap[$j*$n+$i];
                }
                else {
                    $matrix[$newIndices[0]][$newIndices[1]] = $matrix[$i][$j];
                }
            }
        }
    }

    private function getRotatedIndices($size, $i, $j) {
        return array($j, $size-1-$i);
    }
}

?>