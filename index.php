<?php

/**
 * home work 1
 * PHP version 7.2
 * @author   Maxim Ivanov <maxim_91@inbox.ru>
 */

//$name = 'Максим';
//$age = '27';
//
//echo '<pre>';
//print_r('Меня зовут ' . $name . PHP_EOL);
//print_r('Мне ' . $age . ' лет' . PHP_EOL);
//print_r('"!|/\'"\\' . PHP_EOL);
//echo '</pre>';

const ALL_PICTURES = 80;
const MARKER_PICTURES = 23;
const PEN_PICTURES = 40;
echo 'На школьной выставке красками было нарисовано: ' . (ALL_PICTURES - (MARKER_PICTURES + PEN_PICTURES)) . ' картин.';


$age = rand(1, 100);

echo $age;
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}

$day = rand(1, 7);

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

$bmw = [model, speed, doors, year];
