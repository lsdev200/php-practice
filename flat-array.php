<?php
function flattenArray(array $array): array {
    $result = [];
    array_walk_recursive($array, function($value) use (&$result) {
        $result[] = $value;
    });
    return $result;
}


$multiArray = [
    [1, 2, 3, 4, 5],
    [4, 5],
    [6, [7, 8, [9, 10]]]
];

$flatArray = flattenArray($multiArray);
print_r($flatArray);



