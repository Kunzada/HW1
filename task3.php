<!-- Создайте калькулятор времени. Форма принимает количе-
ство минут и выводит его в формате часы:минуты. Например, если
пользователь вводит 150 минут, скрипт должен вывести 2:30. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task3.php" method="POST">
        <input type="number" name="number">
        <input type="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $hours = floor($number / 60);
    $minutes = $number % 60;
    echo "$hours:$minutes";
}