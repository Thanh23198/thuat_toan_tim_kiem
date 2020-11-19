<?php
$numbers=array(1,2,3,4,3);
$value=3;
function demvalue($numbers,$value){
    $count=0;
    for($i=0;$i<count($numbers);$i++){
        if($numbers[$i]===$value){
           $count++;
        }
    }
    return $count;
}
echo demvalue($numbers,$value);