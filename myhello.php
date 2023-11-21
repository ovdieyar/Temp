<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Greetings!!!</title>
</head>
<body>
    <?php
    // Получаем значения параметров First_Name и Last_Name из URL, используя суперглобальный массив $_GET.
    $FirstName = $_GET['First_Name'];
    $LastName = $_GET['Last_Name'];

    // Выводим приветственное сообщение, используя полученные параметры.
    print("<center> Hello $FirstName $LastName !!! </center>");
    ?>
</body>
</html>