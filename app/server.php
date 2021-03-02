<?php
require_once __DIR__ . '/../database/database.php';
// 2nd milestone:
// farà il json encode del mio database. => require_once
// ricordatevi dell'header (vedi le slide)

header('Content-Type: application/json');
$jason = json_encode($dischi);
echo $jason;