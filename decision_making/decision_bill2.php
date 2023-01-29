<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity bill 2</title>
</head>

<body>

<?php
$result_str = $amount = $total = '';
if (isset($_POST['submit'])) {
    $total = $_POST['total'];
    if (!empty($total)) {
        $amount = billCalculation($total);
        $result_str="Electricity bill result for " . $total . " unit: " . $amount;
    }
} else{
    echo "Please insert unit data!";
}


function billCalculation($total){
    $tariff1 = 3.50;
    $tariff2 = 4;
    $tariff3 = 5.20;
    $tariff4 = 6.50;

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

    return $amount ;

}

?>

<div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Total unit:</label>
        <input type="number" name="total">
        <input type="submit" value="calculate" name="submit">
    </form>
</div>

<div>
    <?php  echo "<br>". $result_str; ?>
</div>

</body>

</html>