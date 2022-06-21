<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Талони</title>
    <link rel="stylesheet" href="style.css?1"/>
</head>
<body>
<div class="main">
    <div class="n2">
        <div class="menu">
            <div class="showbutton" id="bCreate" >Create</div>
            <div class="showbutton" id="bReadAll">ReadAll</div>
            <div class="showbutton" id="bRead">Read</div>
            <div class="showbutton" id="bUpdate">Update</div>
            <div class="showbutton" id="bDelete">Delete</div>
        </div>
        <div class="forms" id="Create">
            <h2>Додати касира</h2>
            <form action="add.php" method="post" name="form11">
                <input type="text" required name="surname" placeholder="Прізвище">
                <input type="text" required name="name" placeholder="Ім'я"><br>
                <input type="text" required name="patronymic" placeholder="По батькові">
                <input type="text" required name="phone" placeholder="Номер телефону"><br>
                <br>
                <input type="submit" value="Додати касира" name="button">
            </form>
            <h2>Додати кондуктора</h2>
            <form action="add.php" method="post" name="form12">
                <input type="text" required name="surname" placeholder="Прізвище">
                <input type="text" required name="name" placeholder="Ім'я"><br>
                <input type="text" required name="patronymic" placeholder="По батькові">
                <input type="text" required name="phone" placeholder="Номер телефону"><br>
                <br>
                <input type="submit" value="Додати кондуктора" name="button">
            </form>
            <h2>Додати контрольний лист</h2>
            <form action="add.php" method="post" name="form13">
                <input type="text" required name="date" placeholder="Дата">
                <input type="text" required name="shift" placeholder="Номер зміни"><br>
                <input type="text" required name="route" placeholder="Номер маршруту">
                <input type="text" required name="issued" placeholder="Видано талонів"><br>
                <input type="text" required name="returned" placeholder="Повернуто талонів">
                <input type="text" required name="profit" placeholder="Виручка"><br>
                <input type="text" required name="conductor" placeholder="ID Кондуктора">
                <input type="text" required name="cashier" placeholder="ID Касира"><br>
                <br>
                <input type="submit" value="Додати контрольний лист" name="button">
            </form>
        </div>
        <div class="forms" id="ReadAll">
            <h2>Список усіх касирів</h2>
            <form action="showAll.php" method="post" name="form21">
                <input type="submit" value="Касири" name="button">
            </form>
            <h2>Список усіх кондукторів</h2>
            <form action="showAll.php" method="post" name="form22">
                <input type="submit" value="Кондуктори" name="button">
            </form>
            <h2>Список усіх контрольних листів</h2>
            <form action="showAll.php" method="post" name="form23">
                <input type="submit" value="Контрольні листи" name="button">
            </form>
        </div>
        <div class="forms" id="Read">
            <h2>Контрольні листи за прізвищем кондуктора</h2>
            <form action="show.php" method="post" name="form31">
                <input type="text" required name="surname" placeholder="Прізвище"><br>
                <br>
                <input type="submit" value="Показати" name="button">
            </form>
            <h2>Контрольні листи за маршрутом</h2>
            <form action="show.php" method="post" name="form32">
                <input type="text" required name="route" placeholder="Номер маршруту"><br>
                <br>
                <input type="submit" value="Показати" name="button">
            </form>
            <h2>Контрольні листи за зміною</h2>
            <form action="show.php" method="post" name="form33">
                <input type="text" required name="shift" placeholder="Номер зміни"><br>
                <br>
                <input type="submit" value="Показати" name="button">
            </form>
        </div>
        <div class="forms" id="Update">
            <h2>Змінити телефон касира за прізвищем</h2>
            <form action="updatePhone.php" method="post" name="form41">
                <input type="text" hidden name="type" value="Cashier">
                <input type="text" required name="surname" placeholder="Прізвище"><br>
                <input type="text" required name="phone" placeholder="Телефон"><br>
                <br>
                <input type="submit" value="Змінити" name="button">
            </form>
            <h2>Змінити телефон кондуктора за прізвищем</h2>
            <form action="updatePhone.php" method="post" name="form42">
                <input type="text" hidden name="type" value="Conductor">
                <input type="text" required name="surname" placeholder="Прізвище"><br>
                <input type="text" required name="phone" placeholder="Телефон"><br>
                <br>
                <input type="submit" value="Змінити" name="button">
            </form>
        </div>
        <div class="forms" id="Delete">
            <h2>Видалити усі записи за період</h2>
            <form action="delete.php" method="post" name="form51">
                <input type="text" required name="from" placeholder="З (гггг-мм-дд)"><br>
                <input type="text" required name="to" placeholder="По (гггг-мм-дд)"><br>
                <br>
                <input type="submit" value="Видалити" name="button">
            </form>
            <h2>Видалити усі записи по маршруту</h2>
            <form action="delete.php" method="post" name="form52">
                <input type="text" required name="route" placeholder="Номер маршруту"><br>
                <br>
                <input type="submit" value="Видалити" name="button">
            </form>
            <h2>Видалити усі записи за прізвищем кондуктора</h2>
            <form action="delete.php" method="post" name="form53">
                <input type="text" required name="surname" placeholder="Прізвище"><br>
                <br>
                <input type="submit" value="Видалити" name="button">
            </form>
        </div>
        <div class="forms" id="About">
            <h3>Про додаток</h3>
            <p>Україна, КПІ, ФІОТ, каф. ІСТ, курс ПІС, Курсова робота з Баз Даних.</p>
            <p>Виконав студент групи ІС-02 <a href="https://github.com/feedblackg44">Плостак Ілля</a>.</p>
        </div>
        <div class="footer">
            <div class="showbutton" id="bAbout">About site</div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js?123"></script>
</body>
</html>