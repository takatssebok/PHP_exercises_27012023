<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity bill</title>
</head>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Total unit:</label>
        <input type="number" name="total">
        <input type="submit" value="calculate" name="submit">
    </form>


    <?php

    if (!empty($_POST['total']) && $_POST['total'] >= 0) {

        $tariff1 = 3.50;
        $tariff2 = 4;
        $tariff3 = 5.20;
        $tariff4 = 6.50;

        $total = $_POST['total'];
        $amount = 0;

        $calc1 = 50 * $tariff1;
        $calc2 = 100 * $tariff2;
        $calc3 = 100 * $tariff3;
        $calc4 = ($total - 250) * $tariff4;



        if ($total <= 50) {
            $amount = $total * $tariff1;
        } elseif ($total > 50 && $total <= 150) {
            $amount = $calc1 + ($total - 50) * $tariff2;
        } elseif ($total > 150 && $total <= 250) {
            $amount = $calc1 + $calc2 + ($total - 150) * $tariff3;
        } else {
            $amount = $calc1 + $calc2 + $calc3 + $calc4;
        }

        echo "Electricity bill result for " . $total . " unit: " . $amount;
    } else {
        echo "Enter unit input first!";
    }

    ?>
</body>

</html>