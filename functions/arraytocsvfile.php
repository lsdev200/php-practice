<?php

function arrayToCsvFile($array, $filename) {
    $fp = fopen($filename, 'w');
    foreach ($array as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);
}

function testArrayToCsvFile() {
    $data = array(
        array("Name", "Age", "Sex"),
        array("John", 25, "Male"),
        array("Jane", 27, "Female"),
        array("Bob", 30, "Male")
    );

    arrayToCsvFile($data, "test.csv");

    $file = file_get_contents("test.csv");

    $expected = "Name,Age,Sex\nJohn,25,Male\nJane,27,Female\nBob,30,Male\n";

    if ($file === $expected) {
        echo "Test passed\n";
    } else {
        echo "Test failed\n";
    }
}

testArrayToCsvFile();

