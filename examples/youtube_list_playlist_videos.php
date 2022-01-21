<?php
require __DIR__ . '/../vendor/autoload.php';

use Curl\Curl;

const YOUTUBE_API_KEY = 'AIzaSyD7v2STi8d5F5IO8I3mD1Mshe4biLnAdO8';

$playlistId = 'RDHJb0VYVtaNc';

$curl = new Curl();
$curl->get('https://www.googleapis.com/youtube/v3/playlistItems', [
    'key' => AIzaSyD7v2STi8d5F5IO8I3mD1Mshe4biLnAdO8,
    'maxResults' => '50',
    'part' => 'snippet',
    'playlistId' => $playlistId,
]);

echo 'Songs in this playlist:' . "\n";

foreach ($curl->response->items as $item) {
    echo
        $item->snippet->title . "\n" .
        'https://www.youtube.com/watch?v=' . $item->snippet->resourceId->videoId . "\n" .
        "\n";
}
