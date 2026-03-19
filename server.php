<?php

header('Content-Type: application/json');

$request = $_GET['request'] ?? 'home';

if ($request === 'fetch') {
    $url = $_GET['url'] ?? null;
    if ($url) {
        $response = file_get_contents($url);
        echo $response;
    } else {
        echo json_encode(['error' => 'URL parameter required']);
    }
} else {
    echo json_encode(['message' => 'API ready', 'endpoints' => ['fetch' => 'Use ?request=fetch&url=your_api_url']]);
}

?>
