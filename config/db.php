<?php

$itemsJson = file_get_contents(__DIR__ . '/items.json');
$itemsArray = json_decode($itemsJson, true);
//dd($itemsArray);
return  $itemsArray;