<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация пользователя</title>
</head>
<body>
<h2>Регистрация пользователя</h2>
<form action="register.php" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Зарегистрироваться</button>
</form>
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет числа в файле</title>
</head>
<body>
<h2>Введите число</h2>
<form action="count_number.php" method="post">
    <label for="number">Число от 0 до 10:</label>
    <input type="number" id="number" name="number" min="0" max="10" required><br><br>
    <button type="submit">Подсчитать</button>
</form>
</body>
</html>
