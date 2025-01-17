<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $age.
- Присвойте переменной $age произвольное числовое значение.
*/
$age = isset($_POST['age']) ? (int)$_POST['age'] : null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкции if-elseif-else</title>
</head>
<body>
    <h1>Конструкции if-elseif-else</h1>
    <form method="post" action="">
        <label for="age">Введите ваш возраст:</label>
        <input type="number" id="age" name="age" min="0" required>
        <button type="submit">Отправить</button>
    </form>
    <?php
    if ($age !== null) {
        echo '<p>Вы ввели возраст: ' . $age . '</p>';
        /*
        ЗАДАНИЕ 2
        - Напишите конструкцию if, которая выводит фразу: 'Вам ещё работать и работать' при условии, что значение переменной $age попадает в диапазон чисел от 18 до 59(включительно).
        - Расширьте конструкцию if, выводя фразу: 'Вам пора на пенсию' при условии, что значение переменной $age больше 59.
        - Расширьте конструкцию if-elseif, выводя фразу: 'Вам ещё рано работать' при условии, что значение переменной $age попадает в диапазон чисел от 1 до 17(включительно).
        - Дополните конструкцию if-else, выводя фразу: 'Неизвестный возраст' при условии, что значение переменной $age не попадает в вышеописанные диапазоны чисел.
        */
        if ($age >= 18 && $age <= 59) {
            echo 'Вам ещё работать и работать<br>';
        } elseif ($age > 59) {
            echo 'Вам пора на пенсию<br>';
        } elseif ($age >= 1 && $age <= 17) {
            echo 'Вам ещё рано работать<br>';
        } else {
            echo 'Неизвестный возраст<br>';
        }
    }
    ?>
</body>
</html>
