<?php

/**
 * home work 1
 * PHP version 7.2
 * @author   Maxim Ivanov <maxim_91@inbox.ru>
 */
$name = 'Максим';
$age = '27';

echo '<pre>';
print_r('Меня зовут ' . $name . PHP_EOL);
print_r('Мне ' . $age . ' лет' . PHP_EOL);
print_r('"!|/\'"\\' . PHP_EOL);
echo '</pre>';

const ALL_PICTURES = 80;
const MARKER_PICTURES = 23;
const PEN_PICTURES = 40;
echo "На школьной выставке ". ALL_PICTURES. " рисунков." .MARKER_PICTURES. " из них выполнены фломастерами, ". PEN_PICTURES ." карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке? <br/>";
echo 'На школьной выставке красками было нарисовано: ' . (ALL_PICTURES - (MARKER_PICTURES + PEN_PICTURES)) . ' картин.<br/><br/>';


$age = rand(1, 100);


if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать<br/>";
} elseif ($age > 65) {
    echo "Вам пора на пенсию<br/>";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать<br/>";
} else {
    echo "Неизвестный возраст<br/>";
}

$day = rand(1, 7);

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день<br/>";
        break;
    case 6:
    case 7:
        echo "Это выходной день<br/>";
        break;
    default:
        echo "Неизвестный день<br/>";
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

$cars = array('bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel);


foreach ($cars as $brand => $car) {
    echo "<br>";
    echo "CAR $brand <br/>";
    echo $car['model'] . ' - ' . $car['speed'] . ' - ' . $car['doors'] . ' - ' . $car['year'];
};

const ROW = 10;
const COL = 10;

$table = '<table>';
for ($tr = 1; $tr <= ROW; $tr++) {
    $table .= '<tr>';
    for ($td = 1; $td <= COL; $td++) {
        if($tr % 2 === 0 && $td % 2 === 0){
            $table .= '<td>('. $tr*$td .')</td>';
        }elseif ($tr % 2 !== 0 && $td % 2 !== 0){
            $table .= '<td>['. $tr*$td .']</td>';
        }else{
            $table .= '<td>'. $tr*$td .'</td>';
        }

    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;