<?php
/**
 * Задача №1
 * @param $array
 * @param bool $bool
 * @return string
 */
function printString($array, $bool = false): string
{
    if (!$bool) {
        foreach ($array as $str) {
            echo "<p> $str </p>";
        }
        return "";
    } else {
        return implode($array, ' ');
    }
}

$arrayStr = array('Привет', 'Андрей', 'как', 'дела');
printString($arrayStr);


function calcEverything(... $args)
{
    $result = $args[1];
    $operator = $args[0];

    for ($i = 2; $i < sizeof($args); $i++) {
        switch ($operator) {
            case '+':
                $result += $args[$i];
                break;
            case '-':
                $result -= $args[$i];
                break;
            case '*':
                $result *= $args[$i];
                break;
            case '/':
                $result /= $args[$i];
                break;
        }
    }
    return $result;
}


calcEverything('*', 1, 2, 3, 4, 5);


function printTable($row, $col)
{
    if(!is_int($row) || !is_int($col)){
        echo "Введенные числа не являются целыми. Введите целые числа";
    }
    else{

    $table = '<table>';
    for ($tr = 1; $tr <= $row; $tr++) {
        $table .= '<tr>';
        for ($td = 1; $td <= $col; $td++) {
            if ($tr % 2 === 0 && $td % 2 === 0) {
                $table .= '<td>(' . $tr * $td . ')</td>';
            } elseif ($tr % 2 !== 0 && $td % 2 !== 0) {
                $table .= '<td>[' . $tr * $td . ']</td>';
            } else {
                $table .= '<td>' . $tr * $td . '</td>';
            }

        }
        $table .= '</tr>';
    }
    $table .= '</table>';

    echo $table;
    }
}

printTable(9, 8);




