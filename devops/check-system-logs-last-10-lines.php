<?php
// Displays the last 10 lines of a system log file (e.g., /var/log/syslog).
$logFile = '/var/log/syslog'; // Adjust path for specific log files
$logs = shell_exec("tail -n 10 $logFile");
echo "<pre>$logs</pre>";
?>
