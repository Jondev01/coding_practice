<?php 
// https://leetcode.com/problems/merge-intervals/

/**
 * Definition for an interval.
 * class Interval {
 *     public $start = 0;
 *     public $end = 0;
 *     function __construct(int $start = 0, int $end = 0) {
 *         $this->start = $start;
 *         $this->end = $end;
 *     }
 * }
 */
class Solution {

    /**
     * @param Interval[] $intervals
     * @return Interval[]
     */
    private function cmp($i1, $i2) {
        if($i1 == $i2)
            return 0;
        return $i1 <$i2 ? -1 : 1;
    }
    function merge($intervals) {
        $n = count($intervals);
        if($n == 0)
            return array();
        usort($intervals, array($this, "cmp"));
        $cur = $intervals[0];
        $ret = array();
        for($i = 1; $i<$n; ++$i){
            if( ($cur->end >= $intervals[$i]->start && $cur->end <= $intervals[$i]->end)
                || $intervals[$i]->end >= $cur->start && $intervals[$i]->end <= $cur->end)
                $cur = $this->mergeIntervals($cur, $intervals[$i]);
            else {
                array_push($ret, new Interval($cur->start, $cur->end));
                $cur = $intervals[$i];
            }
        }
        array_push($ret, $cur);
        return $ret;
    }
    private function mergeIntervals($i1, $i2) {
        return new Interval(min($i1->start, $i2->start), max($i1->end,$i2->end));
    }
}

?>