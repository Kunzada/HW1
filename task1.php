<!-- 1. Создайте конвертор валют. Пользователь вводит количе-
ство в USD и выбирает, в какую валюту хочет перевести: EUR, UAH
или KZT, и получает в ответ соответствующую сумму. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>

<body>
    <form method="get">
        <input type="number" name="number">
        <select name="currency" id="currency">
            <option value="EUR">EUR</option>
            <option value="UAH">UAH</option>
            <option value="KZT">KZT</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if(isset($_GET['currency']) && isset($_GET['number']))
{   
    $currency = $_GET['currency'];
    $number=$_GET['number'];
    switch ($currency) {
        case 'EUR':
            $result = $number*0.85;
            break;
        case 'UAH':
            $result = $number*25;
            break;
        case 'KZT':
            $result = $number*0.17;
            break;
        
    }
    echo "Валюта: " . $currency . " Результат: " . $result;
}