<?php
/**
 * @param $arrStr
 * @param bool $concat
 * @return string
 */
function task1($arrStr, $concat = false)
{
    if ($concat) {
        return implode(" ", $arrStr);
    } else {
        foreach ($arrStr as $value) {
            echo '<p>'.$value.'</p>';
        }
    }
}

/**
 * @param mixed ...$args
 * @return string
 */
function task2(...$args)
{
    $operation = array_shift($args);
    $res = $args[0];

    for ($i = 1; $i < sizeof($args); $i++) {
        if ($operation == '+') {
            $res += $args[$i];
        } elseif ($operation == '-') {
            $res -= $args[$i];
        } elseif ($operation == '*') {
            $res *= $args[$i];
        } elseif ($operation == '/') {
            $res /= $args[$i];
        } else {
            return 'Арифметическое действие не определено';
        }
    }

    return 'Результат: '.implode(' '.$operation.' ', $args).' = '.$res;
}

/**
 * @param $m
 * @param $n
 */
function task3($m, $n)
{
    if (!is_int($m) || !is_int($n)) {
        echo 'Неверный тип входных параметров';
        return;
    }

    echo '<table cellpadding="3" cellspacing="1" border="1">';
    for ($i = 1; $i <= $m; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $n; $j++) {
            echo '<td style="text-align: center; width: 30px; height: 35px;">'.$i*$j.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function task4_1()
{
    echo 'Текущие дата и время: '.date("d.m.Y H:i");
}

/**
 * @param $strDate
 */
function task4_2($strDate)
{
    $date = explode(".", $strDate);
    if (checkdate(intval($date[1]), intval($date[0]), intval($date[2]))) {
        echo 'Метка времени Unix для даты '.$strDate.' = '.mktime(0, 0, 0, intval($date[0]), intval($date[1]), intval($date[2]));
    } else {
        echo 'Некорректная дата';
    }
}

/**
 * @param $str
 * @param $s
 */
function task5_1($str, $s)
{
    echo str_replace($s, '', $str);
}

/**
 * @param $str
 * @param $replace
 */
function task5_2($str, $replace)
{
    foreach ($replace as $key => $value) {
        $str = str_replace($key, $value, $str);
    }
    echo $str;
}

/**
 * @param $file
 */
function task6($file)
{
    if (file_exists($file)) {
        echo file_get_contents($file);
    }
    else {
        echo 'Файл '.$file.' не найден';
    }
}