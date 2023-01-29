<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Colours</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars('colours.php')?>" method="post">
        <fieldset>
            <legend>Username</legend>
            <label>Username:</label>
            <input type="text" name="username" required>
        </fieldset>
        <br>
        <fieldset>
            <legend>Favourite colour</legend>
            <label>Red:</label>
            <input type="checkbox" name="list[]" value="red">
            <br>
            <label>Yellow:</label>
            <input type="checkbox" name="list[]" value="yellow">
            <br>
            <label>Blue:</label>
            <input type="checkbox" name="list[]" value="blue">
            <br>
            <label>Green:</label>
            <input type="checkbox" name="list[]" value="green">
            <br>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>