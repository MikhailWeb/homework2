<?php
require('src/function.php');

// task 1
$arrString = ['Все', 'будет', 'хорошо'];
echo 'Задание 1.1:<br>';
task1($arrString);
echo '<br>Задание 1.2:<br><br>';
echo task1($arrString, true);

// task 2
echo '<br><br>Задание 2:<br><br>';
echo task2('+', 3, 5, 2, 7).'<br>';
echo task2('-', 3, 5, 2, 7).'<br>';
echo task2('*', 3, 5, 2, 7).'<br>';
echo task2('/', 3, 5, 2, 7).'<br>';

// task 3
echo '<br>Задание 3:<br><br>';
$m = 5;
$n = 7;
echo '$m = '.$m.'; $n = '.$n.';<br>';
task3($m, $n);
$m = 3;
$n = 't';
echo '<br>$m = '.$m.'; $n = '.$n.';<br>';
task3($m, $n);

// task 4
echo '<br><br>Задание 4.1:<br>';
task4_1();
echo '<br><br>Задание 4.2:<br>';
task4_2('24.02.2016');

// task 5
echo '<br><br>Задание 5.1:<br>';
$str = 'Карл у Клары украл Кораллы';
$s = 'К';
task5_1($str, $s);
echo '<br><br>Задание 5.2:<br>';
$str = 'Две бутылки лимонада';
$replace = ['Две' => 'Три', 'бутылки' => 'ящика', 'лимонада' => 'пива'];
task5_2($str, $replace);

// task 6
echo '<br><br>Задание 6:<br>';
task6('test.txt');