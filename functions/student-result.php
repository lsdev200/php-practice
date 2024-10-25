<?php
//first i have required student marks .
$a = 40;

//define function...
function result($a)
{
  switch (true) {
    case 50 >= $a:
      return "Poor";

    case 60 >= $a:
      return "average";

    case 80 >= $a:
      return "good";

    case 90 >= $a:
      return "very good";

    case 100 >= $a:
      return "excellent";
    default:
      return "somthing went wrong!";
  }
  
}

$result = result($a);

echo "your output: $result";
