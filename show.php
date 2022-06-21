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

        $query = "SELECT ListDate, WorkShiftNum, RouteNum, IssuedСoupons, ReturnedCoupons, Profit 
                  FROM Checklist ";
        if(array_key_exists('surname', $_POST))

            $query .= "INNER JOIN Conductor ON Checklist.fkConductorID = Conductor.pkID
                       WHERE Conductor.cSurname = '".mysqli_real_escape_string($connection, $_POST['surname'])."'";
        if(array_key_exists('route', $_POST))
            $query .= " WHERE Checklist.RouteNum = ".mysqli_real_escape_string($connection, $_POST['route']);
        if(array_key_exists('shift', $_POST))
            $query .= " WHERE Checklist.WorkShiftNum = ".mysqli_real_escape_string($connection, $_POST['shift']);
        $query .= ";";

        $result = mysqli_query($connection, $query);
        $array = mysqli_fetch_all($result);
        if(empty($array))
            echo "<h4>Записів не знайдено!</h4>";
        else
        {
            $height = mysqli_num_rows($result);
            $length = mysqli_num_fields($result);

            echo "<h3>Таблиця записів</h3>
                    <table>";
            for ($i = 0; $i < $height; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $length; $j++) {
                    echo "<th>" . $array[$i][$j] . "</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        mysqli_close($connection);
        ?>
        <br>
        <a href="index.php"><div class="showbutton">Back to Main</div></a>
    </div>
</div>
</body>
</html>