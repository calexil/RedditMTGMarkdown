<?php

$name = $_GET['name'] ?? '';

if(!$name){
    http_response_code(400);
    exit;
}

$url =
    'https://api.scryfall.com/cards/named?exact=' .
    urlencode($name);

$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_USERAGENT => 'RedditMTGMarkdown/1.0'
]);

$result = curl_exec($ch);

curl_close($ch);

header('Content-Type: application/json');
echo $result;