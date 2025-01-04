<?php
$conn = new mysqli('localhost', 'username', 'password', 'database');
echo $conn->connect_error ? 'Connection Failed' : 'Connection Successful';
?>
