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
        foreach ($arrStr as $string) {
            echo '<p>'.$string.'</p>';
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
 * @param $rows
 * @param $cols
 */
function task3($rows, $cols)
{
    if (!is_int($rows) || !is_int($cols)) {
        echo 'Неверный тип входных параметров';
        return;
    }

    echo '<table cellpadding="3" cellspacing="1" border="1">';
    for ($r = 1; $r <= $rows; $r++) {
        echo '<tr>';
        for ($c = 1; $c <= $cols; $c++) {
            echo '<td style="text-align: center; width: 30px; height: 35px;">'.$r*$c.'</td>';
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
    [$day, $month, $year] = explode('.', $strDate);
    if (checkdate($month, $day, $year)) {
        echo 'Метка времени Unix для даты '.$strDate.' = '.mktime(0, 0, 0, $day, $month, $year);
    } else {
        echo 'Некорректная дата';
    }
}

/**
 * @param $str
 * @param $search
 */
function task5_1($str, $search)
{
    echo str_replace($search, '', $str);
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
 * @param $str
 * @param $replace
 */
function task5_2_1($str, $replace)
{
    $src = explode(' ', $str);
    echo implode(' ', str_replace($src, $replace, $src));
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