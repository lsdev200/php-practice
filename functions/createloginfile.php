<?php

function logToFile($message, $filename = 'log.txt') {
  $date = date('Y-m-d H:i:s');
  $logMessage = "$date: $message\n";
  file_put_contents($filename, $logMessage, FILE_APPEND);
}
// Example usage
logToFile("This is a test log message.");

// Test with different filename
logToFile("This is another test message.", 'test_log.txt');

// Check the contents of 'log.txt' and 'test_log.txt' to verify the log entries
if (file_exists('log.txt')) {
    echo "Contents of 'log.txt':\n";
    echo file_get_contents('log.txt') . "\n";
}

if (file_exists('test_log.txt')) {
    echo "Contents of 'test_log.txt':\n";
    echo file_get_contents('test_log.txt') . "\n";
}



