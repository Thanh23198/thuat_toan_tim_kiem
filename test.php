<?php
//$number=array(1,2,3,4);
//$socantim=2;
//function check($number,$socantim){
//        for($i=0;$i<count($number);$i++){
//            if($number[$i]=$socantim){
//                return true;
//            }
//        else{
//            return false;
//        }
//        }
//
//}
//var_dump(check($number,$socantim));

//$number=array(1,2,3);
//$socantim=1;
//function check($number,$socantim){
//    if(binary)
//}


//$list = array(0,10,21,3);
//$x = 10;
//
//function iterative_binary_search($x, $list)
//{
//    $left = 0;  //ptu bat dau
//    $right = count($list)-1;
//
//    while ($left <= $right) {
//        $mid = ($left + $right) >> 1;
//
//        if ($list[$mid] == $x) {
//            return $mid;
//        } elseif ($list[$mid] > $x) {
//            $right = $mid - 1;
//        } elseif ($list[$mid] < $x) {
//            $left = $mid + 1;
//        }
//    }
//
//    return "khong tim thay ";
//}
//
//echo iterative_binary_search($x, $list);


//$numbers=array(1,2,3,4,5);
//$needle=1;
//function binarySearch( $numbers,  $needle) {
//    $low = 0;
//    $high = count($numbers) - 1;
//    while ($low <= $high) {
//        $mid =  intval(($low + $high) / 2);
//
//        if ($numbers[$mid] > $needle) {
//            $high = $mid - 1;
//            echo   $numbers[$mid] . "<br>";
//        } else if ($numbers[$mid] < $needle) {
//            $low = $mid + 1;
//            echo   $numbers[$mid] . "<br>";
//
//        } elseif($numbers[$mid]==$needle) {
//            return $numbers[$mid];
//        }
//    }
//    return 0;
//}
//echo ( binarySearch($numbers,$needle));

function binarySearch( $numbers, $needle) {
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}
$numbers=array(1,2,4,5);
$needle=6;
var_dump(binarySearch($numbers,$needle));