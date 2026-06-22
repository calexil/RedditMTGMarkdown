<?php

$url = $_GET['url'] ?? '';

if (!$url) {
    http_response_code(400);
    exit('Missing URL');
}

// Force cache bust
$url .= (strpos($url, '?') !== false ? '&' : '?')
      . 'cb=' . time();

$ch = curl_init($url);
$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0',
    CURLOPT_TIMEOUT => 30,
]);

$html = curl_exec($ch);

if ($html === false) {
    http_response_code(500);
    exit(curl_error($ch));
}

curl_close($ch);

header('Content-Type: text/html; charset=utf-8');
echo $html;