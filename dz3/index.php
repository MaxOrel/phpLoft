<?php
require('src/functions.php');

//printOrderDelivery();

$testArray = [
  'users' => [
    [
      'name' => 'Mike',
      'id' => 1
    ],
    [
      'name' => 'Venom',
      'id' => 2
    ],
    [
      'name' => 'Metrandir',
      'id' => 3,
      'properties' => ['city' => 'SPb']
    ]
  ]
];
arrayToJson($testArray);