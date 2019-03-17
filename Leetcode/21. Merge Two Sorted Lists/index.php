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
        $firstNode = null;
        $prevNode = null;
        while($l1!=null || $l2!= null) {
            if($prevNode != null) {
                var_dump($l1->val);
                if($l2 == null || $l1->val < $l2->val) {
                    $prevNode->next = new ListNode($l1->$val);
                    $l1=$l1->next;
                }
                else if($l1 == null || $l1->val >= $l2->val) {
                    $prevNode->next = new ListNode($l2->$val);
                    $l2=$l2->next;
                }
                $prevNode = $prevNode->next;
            }
            else {
                if($l1->val < $l2->val) {
                    $prevNode = new ListNode($l1->$val);
                    $l1 = $l1->next;
                }
                else {
                    $prevNode = new ListNode($l2->$val);
                    $l2 = $l2->next;
                }
                $firstNode = $prevNode;
            }
        }
        return $firstNode;
    }
}

?>