<?php


$charactersJson = file_get_contents(__DIR__ . './items.json');
$charactersArray = json_decode($charactersJson, true);
// dd($charactersArray);
return $charactersArray;