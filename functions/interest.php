<?php

function simpleInterest($amount, $int, $time){
  $interest = ($amount * $int * $time) / 100;
  return $interest; 
}

$amount = 10000;
$int = 10;
$time = 5;

$interest = simpleInterest($amount, $int, $time);

echo "simple Interest: $interest";

