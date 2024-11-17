<?php
function checkServerEnvironment() {
    // Gather information about the server
    $environment = [
        'Server Software' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
        'PHP Version' => phpversion(),
        'Document Root' => $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown',
        'Server Name' => $_SERVER['SERVER_NAME'] ?? 'Unknown',
        'Server Protocol' => $_SERVER['SERVER_PROTOCOL'] ?? 'Unknown',
        'Request Method' => $_SERVER['REQUEST_METHOD'] ?? 'Unknown',
        'Client IP' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
        'Script Name' => $_SERVER['SCRIPT_NAME'] ?? 'Unknown',
    ];

    // Format the results into an HTML table for better readability
    echo "<h1>Server Environment Details</h1>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Key</th><th>Value</th></tr>";
    foreach ($environment as $key => $value) {
        echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
    }
    echo "</table>";
}

// Call the function when this script is accessed
checkServerEnvironment();
?>
