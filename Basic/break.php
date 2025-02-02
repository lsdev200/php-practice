<?php 
// Break in For loop
// The break statement can be used to jump out of a for loop.
// Jump out of the loop when $x is 4:

// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>";
// }





// Break in While Loop
// The break statement can be used to jump out of a while loop.

// $x = 0;

// while($x < 10) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>";
//   $x++;
// }




// Break in Do While Loop
// The break statement can be used to jump out of a do...while loop.
// Stop the loop when $i is 3:

// $i = 1;

// do {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// } while ($i < 6);




// Break in For Each Loop
// The break statement can be used to jump out of a foreach loop.
// Stop the loop if $x is "blue":

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

