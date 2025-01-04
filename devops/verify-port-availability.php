<?php
// Checks if a specific port is open on the server.
$host = '127.0.0.1';
$port = 80;

$connection = @fsockopen($host, $port, $errno, $errstr, 5);

if ($connection) {
    echo "Port $port is open on $host";
    fclose($connection);
} else {
    echo "Port $port is closed on $host";
}
?>
