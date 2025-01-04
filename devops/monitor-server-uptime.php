<?php
// Displays the server's uptime (Linux servers only).
$uptime = shell_exec('uptime');
echo "Server Uptime: $uptime";
?>
