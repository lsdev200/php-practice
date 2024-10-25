<?php 

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   echo "$x <br>";
// }


//Keys and Values
// The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
// Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
// This can be done by specifying both the key and value in the foreach defintition, like this:

// $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }


// The foreach Loop on Objects
// The foreach loop can also be used to loop through properties of an object:

  // class Car {
  //   public $color;
  //   public $model;
  //   public function __construct($color, $model) {
  //     $this->color = $color;
  //     $this->model = $model;
  //   }
  // }
  
  // $myCar = new Car("red", "Volvo");
  
  // foreach ($myCar as $x => $y) {
  //   echo "$x: $y <br>";
  // }


//   The break Statement
// With the break statement we can stop the loop even if it has not reached the end:

// Stop the loop if $x is "blue":

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   if ($x == "blue") break;
//   echo "$x <br>";
// }


// The continue Statement
// With the continue statement we can stop the current iteration, and continue with the next:

// Example
// Stop, and jump to the next iteration if $x is "blue":

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   if ($x == "blue") continue;
//   echo "$x <br>";
// }


// Reference passed....
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as &$x) {
//   if ($x == "blue") $x = "pink";
// }

// var_dump($colors);



// Alternative Syntax
// The foreach loop syntax can also be written with the endforeach statement like this

// Example
// Loop through the items of an indexed array:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;