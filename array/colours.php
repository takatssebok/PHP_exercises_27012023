<?php
$username = $colours = "";

if(isset($_POST['submit']) == true){
    if(!empty($_POST['list'])){
    $username=$_POST['username'];
    $colours=$_POST['list'];
    
    echo "The favourite colours of " . $username . ": ";
    
    foreach($colours as $colour){
        echo "<p> - " . $colour . "</p>"; 
    }
} else {
    echo "<p>Please select minimum 1 colour!</p>";
}
}

?>
