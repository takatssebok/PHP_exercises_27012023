<?php 

$delMonth='february';
$month=array('january', 'february', 'march', 'april', 'may');

#array_diff()
$monthnew = array_diff($month, array($delMonth));

var_dump($monthnew);

?>