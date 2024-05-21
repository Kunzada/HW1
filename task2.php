<!-- Определите знак зодиака пользователя. Попросите поль-
зователя ввести свою дату рождения (месяц и день) и на основе
этой информации определите его знак зодиака. Выведите на экран
соответствующий знак зодиака. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <form action="" method="get">
    <input type="date" name="birthday">
    <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 

if (isset($_GET['birthday'])) {
    $birthday = $_GET['birthday'];
    $birthday = date('m-d', strtotime($birthday));
    echo $birthday;
   
    if ($birthday >= '03-21' && $birthday <= '04-20') {
        echo "Your zodiac sign is Aries";
    } elseif ($birthday >= '04-21' && $birthday <= '05-21') {
        echo "Your zodiac sign is Taurus";
    } elseif ($birthday >= '05-22' && $birthday <= '06-21') {
        echo "Your zodiac sign is Gemini";
    } elseif ($birthday >= '06-22' && $birthday <= '07-22') {
        echo "Your zodiac sign is Cancer";
    } elseif ($birthday >= '07-23' && $birthday <= '08-23') {
        echo "Your zodiac sign is Leo";
    } elseif ($birthday >= '08-24' && $birthday <= '09-23') {
        echo "Your zodiac sign is Virgo";
    } elseif ($birthday >= '09-24' && $birthday <= '10-23') {
        echo "Your zodiac sign is Libra";
    } elseif ($birthday >= '10-24' && $birthday <= '11-22') {
        echo "Your zodiac sign is Scorpio";
    } elseif ($birthday >= '11-23' && $birthday <= '12-21') {
        echo "Your zodiac sign is Sagittarius";
    } elseif ($birthday >= '12-22' && $birthday <= '01-20') {
        echo "Your zodiac sign is Capricorn";
    } elseif ($birthday >= '01-21' && $birthday <= '02-19') {
        echo "Your zodiac sign is Aquarius";
    } elseif ($birthday >= '02-20' && $birthday <= '03-20') {
        echo "Your zodiac sign is Pisces";
    }
}

