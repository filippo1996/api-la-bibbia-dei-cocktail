<?php 

$drink = explode(",", $_GET["cocktailName"]);

$price = $_GET["price"];
$pubName = $_GET["pubName"];

//use importa price nella funzione
$filteredArray = array_map(function($value) use($price){
  return
    [
      'idDrink' => $value,
      'price' => $price
    ];
}, $drink);

var_dump($filteredArray);

//creare file txt

$fp = fopen(__DIR__."/../shops/$pubName.txt","wb");

//popolare il file con i dati di variabili con idDrink e prezzo

fwrite($fp, serialize($filteredArray));
fclose($fp);
aaaaaaaa