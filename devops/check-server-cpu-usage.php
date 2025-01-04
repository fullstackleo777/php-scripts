<?php
// Provides CPU load averages over 1, 5, and 15 minutes (Linux only).
$load = sys_getloadavg();
echo "CPU Load (1 min): {$load[0]}%, (5 min): {$load[1]}%, (15 min): {$load[2]}%";
?>
