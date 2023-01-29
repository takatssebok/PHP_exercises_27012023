<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Input number: </label>
        <input type="number" name="number">

        <input type="submit" name="submit" value="submit">
    </form>

    <br><br>
    
    <?php
    if (!empty($_POST['number'])) {

        $num = $_POST['number'];
        $i = 1;
        $result = $i;

        for ($i; $i <= $num; $i++) {
            $result *= $i;
        }

        echo "Number input: <b>" . $num . "</b><br>";
        echo "Factorial of number " . $num . ": <b>" . $result . "</b>";
    } else {
        echo "Please enter a number!";
    }

    ?>
</body>

</html>