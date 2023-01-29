<?php 

$delMonth='february';
$month=array('january', 'february', 'march', 'april', 'may');

#foreach()
foreach (array_keys($month, $delMonth) as $key){
    unset($month[$key]);
}

var_dump($month);

?>