<?php
function calculateAge($dob) {
    // Define the format we want to check against
    $format = 'Y-d-m';
    
    // Create a DateTime object from the given date string
    $birthDate = DateTime::createFromFormat($format, $dob);
    
    // Check if the date is valid and matches the format
    if ($birthDate && $birthDate->format($format) === $dob) {
        // Get the current date
        $currentDate = new DateTime();
        
        // Calculate the age difference
        $age = $currentDate->diff($birthDate)->y;
        
        return $age;
    } else {
        return "Invalid Date Format";
    }
}

// Test the function
$dob1 = "2004-11-08";
$dob2 = "2024-13-07"; // Invalid date
$dob3 = "1982-10-12";

echo "Age: " . calculateAge($dob1) . "\n"; // Output: Age based on DOB
echo "Age: " . calculateAge($dob2) . "\n"; // Output: Invalid Date Format
echo "Age: " . calculateAge($dob3) . "\n"; // Output: Age based on DOB

