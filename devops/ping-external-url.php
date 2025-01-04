<?php
// Checks if an external URL is accessible from the server.
$url = 'https://www.google.com';
$response = @file_get_contents($url);
echo $response ? 'URL is reachable' : 'Failed to reach URL';
?>
