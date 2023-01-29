<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern</title>
</head>
<body>

    <?php 
    for($row=1; $row<=8; $row++){
        
        for($column=$row; $column>0; $column--)
        {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>