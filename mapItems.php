<?php 
header("Access-Control-Allow-Origin: *");
$externalIp = file_get_contents('https://docs.google.com/spreadsheets/d/1urKL-O1dKmlZX-HD5gZMq48qUJwo0Kwqjxja5BOFjGQ/pub?gid=0&single=true&output=csv');
$array = array_map("str_getcsv", explode("\n", $externalIp));
$json = json_encode($array);
echo $json;
?>
