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
        $i = $m-1;
        $j = $n-1;
        $cur = $m+$n-1;
        while($j>=0) {
            $nums1[$cur--] = $i >= 0 && $nums1[$i] > $nums2[$j] ? $nums1[$i--] : $nums2[$j--];
        }
    }
}


?>