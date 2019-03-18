<?php 
// https://leetcode.com/problems/powx-n/

class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    private $map = array();
    function myPow($x, $n) {
        if($x == 0)
            return 0;
        if($n == 0)
            return 1;
        
        if(array_key_exists($n, $this->map))
            return $this->map[$n];
        $res;
        if($n > 0) {
            if($n%2 == 0) 
                $res =  $this->myPow($x, $n/2)*$this->myPow($x, $n/2);
            else
                $res = $x*$this->myPow($x, ($n-1)/2)*$this->myPow($x, ($n-1)/2);
        }
        else {
            if($n == -1)
                return 1/$x;
            if($n%2 == 0) 
                $res =  $this->myPow($x, $n/2)*$this->myPow($x, $n/2);
            else
                $res = $this->myPow($x, ($n+1)/2)*$this->myPow($x, ($n+1)/2)/$x;
        }
        $this->map[$n] = $res;
        return $res;
    }
}

?>