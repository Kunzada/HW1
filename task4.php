<!-- . Создайте форму кинокритика. Пользователь вводит
оценку (от 1 до 10) для недавно просмотренного фильма. Скрипт
выводит рекомендацию о том, стоит ли посмотреть этот фильм на -->
<!-- основе оценки (например, «Отличный выбор!», «Неудача, лучше вы-
брать что-то другое»). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task4.php" method="get">
        <p>Оценка: </p>
        <input type="text" name="name" placeholder="Name of film">
        <input type="number" name="mark" min="1" max="10">
        <input type="submit">        
    </form>
</body>
</html>
<?php
if ( isset($_GET['mark'])) {
   
    $mark = $_GET['mark'];

if ($mark == 10) {
    echo "Превосходный выбор!"; 
}           
elseif ($mark == 9) {                                                                                                           
    echo "Потрясающий фильм! Фильм превзошел мои ожидания!";
}
elseif ($mark == 8) {
    echo "Отличный выбор!";
}
elseif ($mark == 7) {
    echo "Фильм был очень хорошим, мне понравился!";
}
elseif ($mark == 6) {
    echo "Хороший фильм с несколькими запоминающимися сценами!";
}
elseif ($mark == 5) {
    echo "Фильм получился неплохим, но ему не хватает глубины!";
}
elseif ($mark == 4) {
    echo "Есть несколько хороших моментов, но фильм нуждается в доработке!";
}
elseif ($mark == 3) {
    echo "Некоторые сцены были интересными, но в целом фильм получился слабым!";
}
elseif ($mark == 2) {
    echo "Фильм не оправдал ожиданий, но в нем есть интересные идеи!";

}
elseif ($mark == 1) {
    echo "Неудача, лучше выбрать что-то другое!";
}
}