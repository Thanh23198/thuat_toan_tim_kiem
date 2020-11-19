<?php
//$arr=array(1,2,3,4,5);
//$sct=5;
//function check($arr,$sct){
//    $left = 4;
//    $right = count($arr)-1;
//    while ($left<=$right){
//        $middle=intval($left+$right)/2;
//        if($arr[$middle]==$sct){
//            return $arr[$middle];
//        }
//
//    }
//}
//echo check($arr,$sct);

$list = array(0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144);
$x = 55;

function binary_search($x, $list, $left, $right)
{
    if ($left > $right)
        return -1;

    $mid = ($left + $right) >> 1;

    if ($list[$mid] == $x) {
        return $mid;
    } elseif ($list[$mid] > $x) {
        return binary_search($x, $list, $left, $mid-1);
    } elseif ($list[$mid] < $x) {
        return binary_search($x, $list, $mid+1, $right);
    }
}

echo binary_search($x, $list, 0, count($list)-1);