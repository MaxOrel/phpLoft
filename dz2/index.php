<?php
require('src/function.php');

$arrayStr = array('Привет', 'Андрей', 'как', 'дела');
printString($arrayStr);

calcEverything('*', 1, 2, 3, 4, 5);

printTable(9, 8);
echo '<br>';

printDate();

textEdit('Карл у Клары украл Кораллы');

textReplace('Две бутылки лимонада', 'Две', 'Три');

createTxt('text.txt');