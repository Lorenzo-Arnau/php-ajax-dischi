<?php
require_once __DIR__ . '/../database/database.php';
// 2nd milestone:
// farà il json encode del mio database. => require_once
// ricordatevi dell'header (vedi le slide)
$querySearch = $_GET['genere'];
if ($querySearch == false) {
   $dischi = $dischi;
}else{
  $dischi = array_filter($dischi, function ($keyValue) use ($querySearch) {
        return ($keyValue['genre'] == $querySearch);
    });
}
header('Content-Type: application/json');
$jason = json_encode($dischi);
echo $jason;
