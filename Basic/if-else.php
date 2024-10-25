<?php

// $a = 13;

// $b = $a < 10 ? "Hello" : "Good Bye";

// echo $b;

//nested if-else statements..

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

