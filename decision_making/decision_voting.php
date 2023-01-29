<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote check</title>
</head>
<body>
<?php
$age = $answer = $check = "";

if(isset($_POST['age']) && is_numeric($_POST['age'])){
    $age=$_POST['age'];
    $check=$_POST['check'];
    $answer= answer($age);

} 

function answer($age){
    if($age<18){
        $result = "not eligible";        
    } else {
        $result="eligible";
    }
    return $result;
}

?>


    <h2>Please enter your age!</h2>

    <fieldset>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <label>Age:</label>
        <input type="number" name="age" min=0>
        <br><br>
        <input type="submit" name="check" value="Checking age">

        </form>
    </fieldset>

    <div>
        <?php echo "<br><div>Based on your age (". $age. ") you are <b>" . $answer . "</b> to vote!</div>"; ?>
    </div>
</body>
</html>