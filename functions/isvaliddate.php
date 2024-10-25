<?php
function isValidDate($date) {
    // Define the format we want to check against
    $format = 'Y-m-d';
    
    // Create a DateTime object from the given date string
    $d = DateTime::createFromFormat($format, $date);
    
    // Check if the date is valid and matches the format
    return $d && $d->format($format) === $date;
}

// Test the function
$date1 = "2024-10-07";
$date2 = "2024-13-07"; // Invalid month
$date3 = "2024-10-32"; // Invalid day
$date4 = "07-10-2024"; // Invalid format

echo isValidDate($date1) ? "Valid Date" : "Invalid Date"; // Output: Valid Date
echo "\n";
echo isValidDate($date2) ? "Valid Date" : "Invalid Date"; // Output: Invalid Date
echo "\n";
echo isValidDate($date3) ? "Valid Date" : "Invalid Date"; // Output: Invalid Date
echo "\n";
echo isValidDate($date4) ? "Valid Date" : "Invalid Date"; // Output: Invalid Date
