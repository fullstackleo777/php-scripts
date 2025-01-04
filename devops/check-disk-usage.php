<?php
// Displays the free disk space on the server.
$bytes = disk_free_space('/');
$gb = round($bytes / (1024 * 1024 * 1024), 2);
echo "Free Disk Space: {$gb} GB";
?>
