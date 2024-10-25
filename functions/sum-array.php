<?php

function calculate($a, $act = '')
{
  
  if ($act == 'multiply') {
    $total = 1;
  } else {
    $total = 0;
  }

  foreach ($a as $val) {

    switch ($act) {
      case "multiply":
        $total = ($total * $val);
        break;
      case "sum":
        $total = ($total + $val);
        break;
      default:
        echo "not data avilable";

    }
    //   if ($act == 'multiply') {
    //     $total = ($total * $val);
    //   } else {
    //     $total = ($total + $val);
    //   }

  }
  return $total;
}

$arraysum = array(5, 3, 4, 6);

echo calculate($arraysum, 'multiply');