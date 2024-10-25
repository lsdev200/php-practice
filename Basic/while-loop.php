<?php 

// $i = 1;
// while ($i < 6) {
//   echo $i;
//   $i++;
// }

//With the break statement we can stop the loop even if the condition is still true:

  $i = 1;
  while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
  }