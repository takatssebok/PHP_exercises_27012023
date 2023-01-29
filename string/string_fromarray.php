<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])){
        $count_colors = count($_POST['check_list']);
        $username=$_POST['username'];

        echo $username . "'s favourite colors are the following " . $count_colors . " option(s): <br>";

        foreach($_POST['check_list'] as $selected){
            echo "<p>$selected</p>";
        }
    }

} else {
    echo "Please select your favourite colors!";
}

?>