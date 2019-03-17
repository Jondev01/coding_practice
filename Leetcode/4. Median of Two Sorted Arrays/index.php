<?php 
//https://leetcode.com/problems/median-of-two-sorted-arrays/

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $left1 = 0;
        $left2 = 0;
        $right1 = count($nums1)-1;
        $right2 = count($nums2)-1;
        $startTotal = count($nums1)+count($nums2); 
        do {
            echo "($left1 $right1) ($left2 $right2)";
            $total = $right1-$left1+$right2-$left2+2;
            $mid1  = floor(($left1+$right1)/2);
            $mid2  = floor(($left2+$right2)/2);
            if($mid1-$left1<floor($total/2))
                $left1 = $mid1;
            else if($mid1-$left1>floor(($total+1)/2))
                $right1 = $mid1;
            if($mid2-$left2<floor($total/2))
                $left2 = $mid2;
            else if($mid2-$left2>floor(($total+1)/2))
                $right2 = $mid2;
        } while($left1 <= $right1 || $left2 <= $right2);
    }
}

?>