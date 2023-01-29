<?php 

$delMonth='february';
$month=array('january', 'february', 'march', 'april', 'may');

#array_search()
if(($key = array_search($delMonth, $month)) == true){
    unset($month[$key]);
}

var_dump($month);

?>