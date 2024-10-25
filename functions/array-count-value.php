<?php
function countOccurrences($array) {
    $counts = [];

    foreach ($array as $value) {
        if (isset($counts[$value])) {
            $counts[$value]++;
        } else {
            $counts[$value] = 1;
        }
    }

    return $counts;
}

$data = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

$result = countOccurrences($data);

print_r($result);

