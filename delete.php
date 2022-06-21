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

        $query = "DELETE FROM Checklist";
        if(array_key_exists('from', $_POST) && array_key_exists('to', $_POST))
        {
            $query .= " WHERE Checklist.ListDate >= '".mysqli_real_escape_string($connection, $_POST['from'])."' 
            AND Checklist.ListDate <= '".mysqli_real_escape_string($connection, $_POST['to'])."'";
        }
        if(array_key_exists('route', $_POST))
            $query .= " WHERE Checklist.RouteNum = ".mysqli_real_escape_string($connection, $_POST['route']);
        if(array_key_exists('surname', $_POST))
            $query .= " WHERE Checklist.fkConductorID = (SELECT pkID FROM Conductor
                        WHERE Conductor.cSurname = '".mysqli_real_escape_string($connection, $_POST['surname'])."')";
        $query .= ";";

        $result = mysqli_query($connection, $query);
        if ($result)
            print("Записи успішно видалено!");
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