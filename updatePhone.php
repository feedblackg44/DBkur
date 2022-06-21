<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Талони</title>
    <link rel="stylesheet" href="style.css?1" />
</head>
<body>
<div class="main">
    <div class="n2">
        <?php
        $connection = @mysqli_connect('127.0.0.1', 'root', '') or die('Could not connect!');
        mysqli_select_db($connection, "tickets");

        $type = mysqli_real_escape_string($connection, $_POST['type']);
        $surname = mysqli_real_escape_string($connection, $_POST['surname']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $query = "UPDATE `".$type."`
                  SET PhoneNumber = '".$phone."'
                  WHERE cSurname = '".$surname."'";
        $result = mysqli_query($connection, $query);
        if ($result)
            print("Успіх!");
        else
            print("Failed!");

        mysqli_close($connection);
        ?>
        <br>
        <a href="index.php"><div class="showbutton">Back to Main</div></a>
    </div>
</div>
</body>
</html>