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
        switch (mysqli_real_escape_string($connection, $_POST['button']))
        {
            case "Додати касира":
                $name = mysqli_real_escape_string($connection, $_POST['name']);
                $surname = mysqli_real_escape_string($connection, $_POST['surname']);
                $patronymic = mysqli_real_escape_string($connection, $_POST['patronymic']);
                $phone = mysqli_real_escape_string($connection, $_POST['phone']);
                $query = "INSERT INTO `Cashier` (`cName`, `cSurname`, `cPatronymic`, `PhoneNumber`)
                          VALUES ('".$name."', '".$surname."', '".$patronymic."', '".$phone."')";
                $result = mysqli_query($connection, $query);
                if ($result)
                    print("Касира успішно додано!");
                else
                    print("Failed!");
                break;
            case "Додати кондуктора":
                $name = mysqli_real_escape_string($connection, $_POST['name']);
                $surname = mysqli_real_escape_string($connection, $_POST['surname']);
                $patronymic = mysqli_real_escape_string($connection, $_POST['patronymic']);
                $phone = mysqli_real_escape_string($connection, $_POST['phone']);
                $query = "INSERT INTO `Conductor` (`cName`, `cSurname`, `cPatronymic`, `PhoneNumber`)
                          VALUES ('".$name."', '".$surname."', '".$patronymic."', '".$phone."')";
                $result = mysqli_query($connection, $query);
                if ($result)
                    print("Кондуктора успішно додано!");
                else
                    print("Failed!");
                break;
            case "Додати контрольний лист":
                $date = mysqli_real_escape_string($connection, $_POST['date']);
                $shift = mysqli_real_escape_string($connection, $_POST['shift']);
                $route = mysqli_real_escape_string($connection, $_POST['route']);
                $issued = intval($connection, $_POST['issued']);
                $returned = intval($connection, $_POST['returned']);
                $profit = round(floatval($connection, $_POST['profit']), 2);
                $conductor = intval($connection, $_POST['conductor']);
                $cashier = intval($connection, $_POST['cashier']);
                $query = "INSERT INTO `Checklist` (`ListDate`, `WorkShiftNum`, `RouteNum`, `IssuedСoupons`, 
                                                   `ReturnedCoupons`, `Profit`, `fkCashierID`, `fkConductorID`)
                          VALUES ('".$date."', '".$shift."', '".$route."', '".$issued."',
                                  '".$returned."', '".$profit."', '".$conductor."', '".$cashier."')";
                $result = mysqli_query($connection, $query);
                if ($result)
                    print("Кондуктора успішно додано!");
                else
                    print("Failed!");
                break;
        }
        mysqli_close($connection);
        ?>
        <br>
        <a href="index.php"><div class="showbutton">Back to Main</div></a>
    </div>
</div>
</body>
</html>