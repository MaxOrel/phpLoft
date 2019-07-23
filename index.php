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


$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
);
$toyota = array(
    'model' => 'Rav4',
    'speed' => 180,
    'doors' => 6,
    'year' => '2018'
);
$opel = array(
    'model' => 'Astra',
    'speed' => 180,
    'doors' => 7,
    'year' => '2019'
);

$car = array('bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel);


foreach ($car as $key => $value) {
    echo nl2br(PHP_EOL);
    echo nl2br('CAR ' . $key . PHP_EOL);
    foreach ($value as $k => $v) {
        echo nl2br($v . ' ');
    }
};

const ROW = 10;
const COL = 10;

$table = '<table border="1">';
for ($tr = 1; $tr <= ROW; $tr++) {
    $table .= '<tr>';
    for ($td = 1; $td <= COL; $td++) {
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;