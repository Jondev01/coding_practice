<?php 
class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $curRow = 0;
        $length = strlen($s);
        $columns = $this->getColumns($s, $numRows);
        $output = '';
        for($j=0; $j<$numRows; $j++) {
            for($i=0; $i<count($columns); ++$i) {
                if(isset($columns[$i][$j]))
                    $output = $output . $columns[$i][$j];
            }
        }
        return $output;
    }

    private function getColumns($s, $numRows) {
        $curRow = 0;
        $length = strlen($s);
        $columns = array();
        if($length == 0)
            return $columns;
        $curColumn = 0;
        $goDown = true;
        $i = 0;
        while($i<$length) {
            if($curRow == 0){
                array_push($columns, array($s[$i]));
                $i += 1;
                if($numRows >1){
                    $goDown = true;
                    $curRow += 1;
                }
            }
            else if($goDown) {
                array_push($columns[count($columns)-1], $s[$i]);
                $i += 1;
                if($curRow  < $numRows -1){
                    $curRow += 1;
                }
                else {
                    $goDown = false;
                    $curRow -= 1;
                }

            }
            else {
                $arr = array('', '', '', '');
                $arr[$curRow] = $s[$i];
                $i += 1;
                array_push($columns, $arr);
                $curRow -= 1;
            }
        }
        while(count($columns[count($columns)-1]) <$numRows){
            array_push($columns[count($columns)-1], '');
        }
        return $columns;

    }
}
$solution = new Solution();
echo $solution->convert("pleqlwphapjnadqhdcnvwdtxjbmyppphauxnspusgdhiixqmbfjxjcvudjsuyibyebmwsiqyoygyxymzevypzvjegebeocfuftsx", 42);


?>