<?php
// Function check if a number is prime
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Generate an array of 100 random values 
$randomValues = [];
for ($i = 0; $i < 100; $i++) {
    $randomValues[] = rand(1, 100);
}


// Print prime numbers from the array
echo "Prime Numbers:\n";
foreach ($randomValues as $value) {
    if (isPrime($value)) {
        echo $value . " "; 
    }
}

