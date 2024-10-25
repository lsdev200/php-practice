<?php
// Sample array of associative arrays
$people = [
    ["name" => "John", "age" => 30],
    ["name" => "Jane", "age" => 25], 
    ["name" => "Doe", "age" => 35],
    ["name" => "Alice", "age" => 28],
];

// Function to sort the array by a specific key
function sortByKey($array, $key) {
    usort($array, function ($a, $b) use ($key) {
        return $a[$key] - $b[$key];
    });
    return $array;
}

// Sort the array by the 'age' key
$sortedPeople = sortByKey($people, $key);


echo "<pre>";
print_r($sortedPeople);
echo "</pre>";
