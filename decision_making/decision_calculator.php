<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <?php

    $firstnum = $secondnum = $result = $operator = "";
    #numbers
    if (!empty($_POST['firstnumber']) && !empty($_POST['secondnumber']) && is_numeric($_POST['firstnumber']) && is_numeric($_POST['secondnumber'])) {

        $firstnum = $_POST['firstnumber'];
        $secondnum = $_POST['secondnumber'];
        $operator = $_POST['operator'];

        $result = calculation($operator, $firstnum, $secondnum);

        $result_str = "The result is: " . $result;
    } else{
        $result_str = "Please insert two numbers!";
    }

    #cases
    function calculation($operator, $firstnum, $secondnum)
    {
        switch ($operator) {
            case "Addition":
                $result = $firstnum + $secondnum;

                return $result;
                break;
            case "Subtraction":
                $result = $firstnum - $secondnum;

                return $result;
                break;
            case "Multiplication":
                $result = $firstnum * $secondnum;

                return $result;
                break;
            case "Division":
                $result = $firstnum / $secondnum;

                return $result;
                break;

            default:
                $result = "Please insert numbers!";
                return $result;
        }
    }

    ?>


    <h2>PHP simple calculator</h2>

    <fieldset>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <input type="number" name="firstnumber">
            <label>First number</label>
            <br>
            <input type="number" name="secondnumber">
            <label>Second number</label>
            <br><br>
            <input type="submit" name="operator" value="Addition">
            <input type="submit" name="operator" value="Subtraction">
            <input type="submit" name="operator" value="Multiplication">
            <input type="submit" name="operator" value="Division">
        </form>
    </fieldset>
    <br>

    <div>
        <?php echo "<br> " . $result_str; ?>
    </div>
</body>

</html>