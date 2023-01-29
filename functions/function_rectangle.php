<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of rectangle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $error = $length = $width = $area =  "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['length']) && empty($_POST['width'])) {
            $error = "Please insert the required numbers!";
        } else {
            $length = $_POST['length'];
            $width = $_POST['width'];
            $area = areaCalculation($length, $width);
        }
    }

    function areaCalculation($length, $width)
    {
        $area = $length * $width;
        return $area;
    }

    ?>

    <h1>Area of rectangle</h1>
    <h2>Please insert length and width!</h2>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <label>Length: </label>
            <input type="number" name="length">
            <br>
            <label>Width: </label>
            <input type="number" name="width">
            <br><br>
            <input type="submit" name="submit" value="Calculate">
        </fieldset>
    </form>
    <div>
        <p><?php echo $error; ?></p>
        <p>length: <?php echo $length; ?></p>
        <p>width: <?php echo $width; ?></p>
        <p>area: <?php echo $area; ?></p>
    </div>

</body>

</html>