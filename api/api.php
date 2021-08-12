<?php
//Set error warning in ErrorException
set_error_handler(
    function($severity, $message, $file, $line) {
        throw new ErrorException($message, $severity, $severity, $file, $line);
    }
);

$filter = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail');
if(!empty($_GET['word'])){
    $filter = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/search.php?s='.$_GET['word']);
}

$apiObj = json_decode($filter);

$_GET['shop'] ??= null;

try{
    $string_data = file_get_contents(__DIR__.'/../shops/'.$_GET['shop'].'.txt');
} catch(Exception $e){
    echo $e->getMessage();
    exit;
}

$shop = unserialize($string_data);

$apiFilter = [];
if($apiObj->drinks){
    $apiFilter = array_filter($apiObj->drinks, function($ele){
        global $shop;
        foreach($shop as $item){
            if($item['idDrink'] === $ele->idDrink){
                $ele->price = $item['price'];
                return true;
            }
        }
    });
}

$apiFilter = array_values($apiFilter);


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET, PUT");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-type: application/json');
echo json_encode($apiFilter);
