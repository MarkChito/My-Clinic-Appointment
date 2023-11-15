<?php
$logFile = './logs/visitors_log.txt';

// Get visitor information
$ipAddress = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$timestamp = date('Y-m-d H:i:s');

// Format the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Browser: $browser\n";

// Write the log message to the file
file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX)
?>
