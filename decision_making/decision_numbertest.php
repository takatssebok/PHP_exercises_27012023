<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number test</title>
</head>

<body>
    <?php
    $number = $answer = "";

    if (isset($_POST['submit']) && is_numeric($_POST["number"])) {
    $number=$_POST["number"];
    $answer=test($number);    
    } 

function test($number) {
    if($number>0){
        $answer="positive";
    } elseif ($number<0){
        $answer="negative";
    } else {
        $answer="zero";
    }
    return $answer;
}

    ?>

    <h2>Please insert a number!</h2>
    <fieldset>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

            <input type="number" name="number">
            <input type="submit" name="submit" value="check">

        </form>
    </fieldset>

    <div><?php echo "The given number " . $number . " is " . $answer ?></div>
</body>

</html>