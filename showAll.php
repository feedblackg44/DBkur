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
        <a href="index.php"><div class="showbutton">Вийти на головну</div></a>
        <?php
        $connection = @mysqli_connect('127.0.0.1', 'root', '') or die('Could not connect!');
        mysqli_select_db($connection, "tickets");
        $tableName = mysqli_real_escape_string($connection, $_POST["button"]);
        $table = "";
        switch ($tableName)
        {
            case "Касири":
                $table = "cashier";
                break;
            case "Кондуктори":
                $table = "conductor";
                break;
            case "Контрольні листи":
                $table = "checklist";
                break;
        }
        $result = mysqli_query($connection, "SELECT * FROM ".$table);
        $array = mysqli_fetch_all($result);
        $height = mysqli_num_rows($result);
        $length = mysqli_num_fields($result);

        echo "<h3>".$tableName."</h3>
                <table>";
        for ($i = 0; $i < $height; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $length; $j++) {
                echo "<th>".$array[$i][$j]."</th>";
            }
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($connection);
        ?>
    </div>
</div>
</body>
</html>