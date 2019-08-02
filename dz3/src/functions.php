<?php

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

function arrayToJson($arr)
{
  file_put_contents('output.json', json_encode($arr));
  $flagModeOption = rand(0, 1);

  $jsonFile = file_get_contents('output.json');
  if ($flagModeOption) {
    $newJson = json_decode($jsonFile, true);
    $newJson['users'][0]['name'] = 'Petia';
    $newJson = json_encode($newJson);
    file_put_contents('output2.json', $newJson);

    echo 'Удача на твоей стороне файл output.json изменен и создан новый output2.json';
  }
}