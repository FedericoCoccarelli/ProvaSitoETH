<?php
// Print PHP version information
echo "PHP version: " . phpversion() . "<br>";

// Print server software information
echo "Server software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

// Print server name
echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";

// Print server address
echo "Server address: " . $_SERVER['SERVER_ADDR'] . "<br>";

// Print server port
echo "Server port: " . $_SERVER['SERVER_PORT'] . "<br>";

// Print document root
echo "Document root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

// Print server administrator
echo "Server administrator: " . $_SERVER['SERVER_ADMIN'] . "<br>";

// Print client IP address
echo "Client IP address: " . $_SERVER['REMOTE_ADDR'] . "<br>";

// Print user agent string
echo "User agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
?>
