<?php

// function bytesToHumanReadable($bytes, $decimals = 2) {
//     $sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
//     $factor = floor((strlen($bytes) - 1) / 3);
//     return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . $sizes[$factor];
// }


// echo bytesToHumanReadable(1024) . "\n";      // Output: 1.00 KB
// echo bytesToHumanReadable(1048576) . "\n";   // Output: 1.00 MB
// echo bytesToHumanReadable(107374146) . "\n"; // Output: 1.00 GB



/**
 * This function formats a given size in bytes into a human-readable format.
 * It takes two parameters: the size in bytes and the precision (optional, default is 2).
 * It returns a string containing the formatted size and the appropriate unit (B, KB, MB, ...).
 *
 * Example: formatBytes(1024) returns "1.00 KB"
 */
function formatBytes($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    
    // Handle the case of 0 bytes
    if ($bytes == 0) {
        return '0 B';
    }

    // Calculate the unit (logarithmic scale)
    // We use the floor function to round down the result of the logarithm
    // because we want to get the unit corresponding to the largest power of 1024
    // that is smaller than the size in bytes
    $index = floor(log($bytes, 1024));

    // Calculate the size in the appropriate unit
    // We use the pow function to calculate the power of 1024 corresponding to the unit
    $size = $bytes / pow(1024, $index);

    // Return the formatted size with the appropriate unit
    // We use the round function to round the size to the specified precision
    return round($size, $precision) . ' ' . $units[$index];

}

// Test cases
echo formatBytes(0) . "\n";   
echo formatBytes(1024) . "\n"; 
echo formatBytes(1048576) . "\n";         
echo formatBytes(1073741824) . "\n";      
echo formatBytes(1099511627776) . "\n";   
echo formatBytes(1125899906842624) . "\n";
echo formatBytes(1152921504606846976) . "\n";
echo formatBytes(1180591620717411303) . "\n";
echo formatBytes(999925819614629999) . "\n";