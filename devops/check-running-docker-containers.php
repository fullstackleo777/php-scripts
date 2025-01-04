<?php
// Lists currently running Docker containers (if Docker is installed).
$containers = shell_exec('docker ps');
echo "<pre>$containers</pre>";
?>
