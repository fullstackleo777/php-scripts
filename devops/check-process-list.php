<?php
// Lists running processes on the server for monitoring.
$processes = shell_exec('ps aux');
echo nl2br($processes);
?>
