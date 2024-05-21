<!-- 5. Создайте генератор рецепта кофе. Пользователь выбирает
тип кофе (латте, капучино, эспрессо) и желаемый размер порции
(маленькая, средняя, большая). В зависимости от выбора скрипт
выводит рецепт приготовления кофе с указанием количества ин-
гредиентов. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task5.php" method="post">
        <select name="type">
            <option value="latte">Latte</option>
            <option value="cappuccino">Cappuccino</option>
            <option value="espresso">Espresso</option>
        </select>
        <select name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $size = $_POST["size"];
    $ingredients="";
    switch ($type) {
        case "latte":
            if ($size == "small") {
                $ingredients = "<br/>1 shot of espresso (about 1 ounce)<br/>
                6-7 ounces of steamed milk<br/>
                Foamed milk (a thin layer on top)" ;
            }
            elseif ($size == "medium") {
                $ingredients = "<br/>1-2 shots of espresso (about 1-2 ounces)<br/>
                9-10 ounces of steamed milk</br>
                Foamed milk (a thin layer on top)" ;
            }
            elseif ($size == "large") {
                $ingredients = "2 shots of espresso (about 1-2 ounces)<br/>
                13-14 ounces of steamed milk<br/>
                Foamed milk (a thin layer on top)";
            }
            break;
        case "espresso":
            if ($size == "small") {
                $ingredients = "</br>1 shot of espresso (about 1 ounce or 30 ml of brewed coffee)</br>
                7-9 grams of ground coffee";
            } elseif ($size == "medium") {
                $ingredients = "</br>2 shots of espresso (about 2 ounces or 60 ml of brewed coffee)</br>
                14-18 grams of ground coffee";
            }
            elseif ($size == "large") {
                $ingredients = "</br>3 shots of espresso (about 3 ounces or 90 ml of brewed coffee)</br>
                21-27 grams of ground coffee";
            }
            break;
        case "cappuccino":
            if ($size == "small") {
                $ingredients = "</br>1 shot of espresso (about 1 ounces)</br>
                2 ounces of steamed milk</br>
                2-3 ounces of milk foam";;
            } elseif ($size == "medium") {
                $ingredients = "</br>1 shots of espresso (about 1 ounces)</br>
                3 ounces of steamed milk</br>
                3-4 ounces of milk foam";;
            }
            elseif ($size == "large") {
                $ingredients = "<br/>2 shots of espresso (about 2 ounces)</br>
                5 ounces of steamed milk</br>
                5 ounces of milk foam";
            }
            break;
    }

    echo "Ingredients: $ingredients";
    }