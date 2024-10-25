<?php
function generateRandomString($length) {
    // Define the characters to be used in the string
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    
    $charactersLength = strlen($characters);
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    
    return $randomString;
}

echo generateRandomString(8); 
echo "\n";
echo generateRandomString(42); 
