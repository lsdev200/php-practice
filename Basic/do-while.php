<?php
// $i = 1;

// do {
//   echo $i;
//   $i++;
// } while ($i < 6);



// The break Statement
// With the break statement we can stop the loop even if the condition is still true:
// Stop the loop when $i is 3:

// $i = 1;

// do {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// } while ($i < 6);



// The continue Statement
// With the continue statement we can stop the current iteration, and continue with the next:
// Stop, and jump to the next iteration if $i is 3:

$i = 0;

do {
  $i++;
  if ($i == 5) continue;
  echo $i;
} while ($i < 6);


