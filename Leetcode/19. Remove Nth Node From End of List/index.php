<?php
//https://leetcode.com/problems/remove-nth-node-from-end-of-list/

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $indexMap = array();
        $i = 0;
        $node = $head;
        while($node != null) {
            $indexMap[$i] = $node;
            $i++;
            $node = $node->next;
        }
        $length = count($indexMap);
        $indexMap[$length-$n-1]->next = $indexMap[$length-$n+1];
        for($j=$length-$n+1; $j<$length-1; ++$j) {
            $indexMap[$j]->next = $indexMap[$j+1];
        }
        $indexMap[$length-1]->next = null;
        if($length == $n)
            $head = $head->next;
        $indexMap[$length-$n] = null;
        return $head;
    }
}

?>