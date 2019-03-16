<?php 
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
    function addTwoNumbers($l1, $l2) {
        $firstDigit = null;
        $prevDigit = null;
        $carry = 0;
        while($l1 != null || $l2 != null || $carry!= 0){
            $curDigit = new ListNode(($l1->val + $l2->val+$carry)%10);
            $carry = floor(($l1->val + $l2->val+$carry)/10);
            $l1 = $l1->next;
            $l2 = $l2->next;
            if($prevDigit){
                $prevDigit->next = $curDigit;
            }
            else{
                $firstDigit = $curDigit;
            }
            $prevDigit = $curDigit;
        }
        return $firstDigit;
    }
}

?>