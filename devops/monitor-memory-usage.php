<?php
// Outputs memory usage details in megabytes (Linux only).
$free = shell_exec('free -m');
echo "<pre>$free</pre>";
?>
