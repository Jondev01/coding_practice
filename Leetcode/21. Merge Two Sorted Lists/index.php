<?php 

// https://leetcode.com/problems/merge-two-sorted-lists/

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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $firstNode = new ListNode(0);
        $curNode = $firstNode;
        while($l1!=null && $l2!= null) {
            if($l1->val < $l2->val) {
                $curNode->next = new ListNode($l1->val);
                $l1=$l1->next;
            }
            else {
                $curNode->next = new ListNode($l2->val);
                $l2=$l2->next;
            }
            $curNode = $curNode->next;
        }
        $curNode->next = $l1 == null ? $l2 : $l1;
        return $firstNode->next;
    }
}

?>