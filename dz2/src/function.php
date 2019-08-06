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

function printTable($row, $col)
{
    if (!is_int($row) || !is_int($col)) {
        echo "Введенные числа не являются целыми. Введите целые числа";
    } else {

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

function printDate()
{
    echo date('d.m.Y H:i') . '<br>';
    echo mktime(00, 00, 00, 02, 24, 2016);
    echo '<br><br>';

}

function textEdit($str)
{
    function wordEdit($word)
    {
        return str_replace('К', '', $word);
    }

    $array = explode(' ', $str);
    $newArray = array_map('wordEdit', $array);
    echo implode(' ', $newArray);
    echo '<br>';
}

function textReplace($str, $seach = 'Две', $replace = 'Три')
{
    return str_replace($seach, $replace, $str);
}

function createTxt($fileName)
{
    file_put_contents($fileName, 'Hello again!');
    echo file_get_contents($fileName);
}

