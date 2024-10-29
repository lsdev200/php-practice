<?php

function checkAndCreateFile($filePath) {
    if (!file_exists($filePath)) {
        $file = fopen($filePath, "w");
        if ($file) {
            fclose($file);
            echo "File created successfully.";
        } else {
            echo "Failed to create file.";
        }
    } else {
        echo "File already exists.";
    }
}

// Example usage
checkAndCreateFile("prime.php");




