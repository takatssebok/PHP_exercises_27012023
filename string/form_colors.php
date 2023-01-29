<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>
</head>

<body>
    <h1>Plese enter your username and choose favourite colors</h1>
    <form action="<?php echo htmlspecialchars('string_fromarray.php'); ?>" method="post">
        <fieldset>
            <label>Username:</label>
            <input type="text" name="username">
            <br><br>

            <label>Favourite colors: </label>
            <br>
            Red <input type="checkbox" value="red" name="check_list[]"><br>
            Green <input type="checkbox" value="green" name="check_list[]"><br>
            Black <input type="checkbox" value="black" name="check_list[]"><br>
            Yellow <input type="checkbox" value="yellow" name="check_list[]"><br>
            Pink <input type="checkbox" value="pink" name="check_list[]"><br>
            Blue <input type="checkbox" value="blue" name="check_list[]">
            <br><br>

            <input type="submit" value="submit" name="submit">

        </fieldset>
    </form>
</body>

</html>