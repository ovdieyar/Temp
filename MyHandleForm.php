<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Form result</title>
</head>
<body style="background: yellow;">
    <?php
    // Получаем значения, отправленные из HTML формы, и сохраняем их в соответствующих переменных.
    $FirstName = $_POST['First_Name'];
    $LastName = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Comments = $_POST['Comments'];

    // Выводим значения переменных на страницу результатов.
    print("Your first name is: $FirstName <br>");
    print("Your last name is: $LastName <br>");
    print("Your email is: $Email <br>");
    print("This is what you have to say: $Comments <br>");

    // Выводим сообщение о том, что используется метод POST.
    print("Use mass POST <br>");

    // Мы также можем обращаться к значениям напрямую из массива $_POST.
    print("Your first name is: $_POST[First_Name] <br>");
    print("Your last name is: $_POST[Last_Name] <br>");
    print("Your email is: $_POST[Email] <br>");
    print("This is what you have to say: $_POST[Comments] <br>");

    // Создаем ссылку с параметрами, которые содержат имя и фамилию для перехода на другую страницу.
    print("Click <a href='myhello.php?First_Name=$FirstName&Last_Name=$LastName'>here</a> to see your personal greetings!");
    ?>
</body>
</html>