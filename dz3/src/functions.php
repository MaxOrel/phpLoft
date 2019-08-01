<?php

function printOrderDelivery()
{
    $fileData = file_get_contents('data.xml');
    $xml = new SimpleXMLElement($fileData);

    foreach ($xml->Address as $adress) {
        $typeDocument = $adress->attributes()->Type;
        switch ($typeDocument){
            case 'Shipping':
                echo "Данные о доставке: <br><br>";
                echo "ФИО: $adress->Name <br>";
                echo "Адрес доставки: ул. $adress->Street ; город $adress->City ; Штат/область $adress->State <br>";
                echo "Почтовый индекс: $adress->Zip <br>";
                echo "Страна: $adress->Country <br><br><br>";
                break;

            case 'Billing':
                echo "Данные о плательщике: <br><br>";
                echo "ФИО: $adress->Name <br>";
                echo "Адрес доставки: ул. $adress->Street ; город $adress->City ; Штат/область $adress->State <br>";
                echo "Почтовый индекс: $adress->Zip <br>";
                echo "Страна: $adress->Country <br><br><br>";
                break;
        }
    }

}


//
//function task2()
//{
//
//}
//
//function task3()
//{
//
//}