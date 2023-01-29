<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive factorial</title>
</head>

<body>
   
    <?php
    include 'test_input.php';
    $number = $numberErr = $result = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['number'])) {
            $numberErr = "Number is required!";
        } else {            
            $number = test_input($_POST['number']);
            $result = recursive($number);
        }
    }

    function recursive($number)
    {
        $i = 1;
        $factorial = 1;

        if ($number > 2) {
            for ($i; $i <= $number; $i++) {
                $factorial *= $i;
            }
        } 
        return $factorial;
    }
    ?>

    <h2>Factorial program in PHP</h2>
    <h3>Please insert a number!</h3>
    <br><br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <label>Number: </label>
        <input type="number" name="number">
        <span class="error"><?php echo $numberErr ?></span>
        <br><br>
        <input type="submit" name="submit" value="Calculate factorial">
    </form>

    <div><?php echo "<br>Factorial of " . $number . " is: <b>" . $result . "</b>" ?></div>
</body>

</html>