<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $mem = array();
        for($i=0; $i<count($nums)-1; $i++){
            $mem[$nums[$i]] = $i;
            if(array_key_exists($target-$nums[$i+1], $mem)){
                return array($mem[$target-$nums[$i+1]], $i+1);
            }
        }
    }
}

$task = new Solution();
$solution =  $task->twoSum(array(3,2,4), 6);
var_dump($solution);
foreach($solution as $v){
    echo "$v, ";
}

?>