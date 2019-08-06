<?php
/**
 * Задание #3.1
 */
function printOrderDelivery()
{
  $fileData = file_get_contents('data.xml');
  $xml = new SimpleXMLElement($fileData);

  foreach ($xml->Address as $adress) {
    $typeDocument = $adress->attributes()->Type;
    switch ($typeDocument) {
      case 'Shipping':
        echo "Данные о доставке: <br><br>";
        echo "ФИО: $adress->Name <br>";
        echo "Адрес доставки: ул. $adress->Street ; город $adress->City ; Штат/область $adress->State <br>";
        echo "Почтовый индекс: $adress->Zip <br>";
        echo "Страна: $adress->Country <br><br>  ";
        break;

      case 'Billing':
        echo "Данные о плательщике: <br><br>";
        echo "ФИО: $adress->Name <br>";
        echo "Адрес доставки: ул. $adress->Street ; город $adress->City ; Штат/область $adress->State <br>";
        echo "Почтовый индекс: $adress->Zip <br>";
        echo "Страна: $adress->Country <br><br>";
        break;
    }
  }
  echo "<br>";
  echo "Комментарий к доставке: $xml->DeliveryNotes <br><br>";

  echo "Состав заказа:<br>";
  foreach ($xml->Items->Item as $product) {
    echo "Название товара: $product->ProductName <br>";
    echo "Количество: $product->Quantity <br>";
    echo "Цена: $product->USPrice $ <br>";
    if ($product->ShipDate) {
      echo "Дата доставки: $product->ShipDate <br>";
    }
    if ($product->Comment) {
      echo "Комментарий к товару: $product->Comment <br>";
    }
    echo "<br>";

  }
}

/**
 * Задание #3.2
 */
function compareArray($array1, $array2) //функция сравнения двух массивов и вывод разницы
{
  $difference = array_diff_assoc($array1, $array2);
  if (!empty($difference)) {
    echo "Внесенные изменения:<br/>";
    echo '<pre>';
    print_r($difference);
    echo '</pre>';
  }
}

function arrayToJson($arr)
{
  file_put_contents('output.json', json_encode($arr)); //записываем переданный массив в файл
  $changeArrayFlag = rand(0, 1);
  $jsonFile = file_get_contents('output.json'); //забираем содержимое из файла
  $newArray = json_decode($jsonFile, true); //декодируем json и записываем результат в новую переменную

  if ($changeArrayFlag) {
    $newArray['city'] = ['value' => 'Орел', 'id_user' => '1']; //изменяем массив
    echo 'Удача на твоей стороне файл output.json изменен и создан новый output2.json <br/>';
  } else {
    echo 'Режим записи выключен <br/>';
  }
  file_put_contents('output2.json', json_encode($newArray)); //записываем изменный массив в новый файл

  $jsonFileOne = file_get_contents('output.json');
  $jsonFileTwo = file_get_contents('output2.json');
  $arrayOne = json_decode($jsonFileOne, true);
  $arrayTwo = json_decode($jsonFileTwo, true);
  compareArray($arrayOne, $arrayTwo);

}

/**
 * Задание #3.3
 */
function randomArray($lenght)
{
  $randomArray = array();
  for ($i = 0; $i <= $lenght; $i++) {
    $randomArray [] = rand(1, 100);
  }
  return $randomArray;
}

function saveCsvArray($array)
{
  $fp = fopen('arrayCSV.csv', 'w');
  fputcsv($fp, $array, ';');
}

function getCsvSumm($fileName)
{
  $fp = fopen($fileName, 'r');
  if (!$fp) {
    die('Файл не найден, проверьте наличией файла или указанный путь до файла');
  }

  $array = fgetcsv($fp, 1000 * 1024, ';');

  $summ = 0;

  foreach ($array as $item) {
    if ($item % 2 == 0) {
      $summ += $item;
    }
  }
  echo "Сумма четных чисел из файла равна $summ";
}


/**
 * Задание #3.4
 */

function parserPage($url)
{
  $jsonFile = file_get_contents($url);
  if (!$jsonFile) {
    die('По указанному адресу не найден файл');
  }
  $jsonArray = json_decode($jsonFile, true);
  echo '<pre>';
  echo "title: " . $jsonArray['query']['pages']['15580374']['title'] . "<br>";
  echo "page_id: " . $jsonArray['query']['pages']['15580374']['pageid'];
}