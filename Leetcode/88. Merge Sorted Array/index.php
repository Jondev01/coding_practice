<?php

// https://leetcode.com/problems/merge-sorted-array/

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $i = 0;
        $j = 0;
        while($i<$m) {
            if($nums2[$j] < $nums1[$i+$j] && $i<$m) {
                array_splice($nums1, $i+$j, 0, $nums2[$j]);
                ++$j;
            }
            else ++$i;
        }
        while($j<$n) {
            $nums1[$m+$j] = $nums2[$j];
            ++$j;
        }
        array_splice($nums1,$m+$n);
    }
}


?>