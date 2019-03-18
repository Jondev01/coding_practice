<?php 
// https://leetcode.com/contest/weekly-contest-128/problems/pairs-of-songs-with-total-durations-divisible-by-60/

class Solution {

    /**
     * @param Integer[] $time
     * @return Integer
     */
    function numPairsDivisibleBy60($time) {
        $map = array();
        $count = 0;
        foreach($time as $i => $duration) {
            $timeLeft = (60-$duration%60)%60;
            if(array_key_exists($timeLeft, $map))
                $count += count($map[$timeLeft]);
            if(array_key_exists($duration%60, $map))
                array_push($map[$duration%60], $i);
            else
                $map[$duration%60] = array($i);
        }
        return $count;
    }
}

?>