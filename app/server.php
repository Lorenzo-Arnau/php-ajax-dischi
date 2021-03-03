<?php
require_once __DIR__ . '/../database/database.php';
// 2nd milestone:
// farà il json encode del mio database. => require_once
// ricordatevi dell'header (vedi le slide)
if (array_key_exists ( 'genere' , $_GET ) && !empty($_GET['genere'])) {
   $querySearch = strtolower($_GET['genere']);
   $dischi = array_filter($dischi, function ($keyValue) use ($querySearch) {
         return (strpos(strtolower($keyValue['genre']),$querySearch)!== false);
     });
    }

header('Content-Type: application/json');
$jason = json_encode($dischi);
echo $jason;
