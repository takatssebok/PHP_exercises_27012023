<?php 

$arrayFirst=array('january', 'february', 'march', 'april', 'may', 'june');
$arraySecond=array('march', 'july');

if(array_intersect($arraySecond, $arrayFirst)=== $arraySecond){
    echo "It is a subset.";
} else {
    echo "Not a subset.";
}

?>