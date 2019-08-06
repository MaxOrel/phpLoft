<?php
require('src/functions.php');

const POST_URL = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';

printOrderDelivery();

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
saveCsvArray(randomArray(50));
getCsvSumm('arrayCSV.csv');
parserPage(POST_URL);