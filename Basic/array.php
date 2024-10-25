<?php

// $cars = array("volvo", "jaguar", "BMW", "Audi");

// var_dump($cars);



// $cars = array("Volvo", "BMW", "Toyota");
// echo $cars[2];



// CHANGE ARRAY VALUE

// $cars = array("Volvo", "BMW", "Toyota"); 
// $cars[1] = "Ford";
// var_dump($cars);



// Access Associative Arrays
// To access an array item you can refer to the key name.

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// echo $car["model"];



// Change Value
// To change the value of an array item, use the key name:
// Change the year item:

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// $car["year"] = 2024;
// var_dump($car);



// Loop Through an Associative Array
// To loop through and print all the values of an associative array, you could use a foreach loop, like this:

// Example
// Display all array items, keys and values:

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

// foreach ($car as $x => $y) {
//   echo "$x: $y <br>";
// }





// Excecute a Function Item
// Array items can be of any data type, including function.
// To execute such a function, use the index number followed by parentheses ():
// Execute a function item:


// function myFunction() {
//   echo "I come from a function!";
// }
// $myArr = array("Volvo", 15, myFunction);
// $myArr[2]();





// Loop Through an Associative Array
// To loop through and print all the values of an associative array, you can use a foreach loop, like this:
// Display all array items, keys and values:

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

// foreach ($car as $x => $y) {
//   echo "$x: $y <br>";
// }




// Loop Through an Indexed Array
// To loop through and print all the values of an indexed array, you can use a foreach loop, like this:
// Display all array items:

// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as $x) {
//   echo "$x <br>";
// }








// Update Array Items in a Foreach Loop
// There are different techniques to use when changing item values in a foreach loop.
// One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
// Change ALL item values to "Ford":

// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
//   $x = "Ford";
// }
// unset($x);
// var_dump($cars);








// Add Array Item
// To add items to an existing array, you can use the bracket [] syntax.
// ExampleGet your own PHP Server
// Add one more item to the fruits array:


// $fruits = array("Apple", "Banana", "Cherry");
// $fruits[] = "Orange";



// Associative Arrays
// To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
// Add one item to the car array:

// $cars = array("brand" => "Ford", "model" => "Mustang");
// $cars["color"] = "Red";






// Add Multiple Array Items
// To add multiple items to an existing array, use the array_push() function.
// Add three item to the fruits array:


// $fruits = array("Apple", "Banana", "Cherry");
// array_push($fruits, "Orange", "Kiwi", "Lemon");




// Add Multiple Items to Associative Arrays
// To add multiple items to an existing array, you can use the += operator.
// Add two items to the cars array:

// $cars = array("brand" => "Ford", "model" => "Mustang");
// $cars += ["color" => "red", "year" => 1964];




// Remove Array Item
// To remove an existing item from an array, you can use the array_splice() function.

// With the array_splice() function you specify the index (where to start) and how many items you want to delete.


// $cars = array("Volvo", "BMW", "Toyota");
// array_splice($cars, 1, 1);
// var_dump($cars);



// Using the unset Function
// You can also use the unset() function to delete existing array items.
// Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.

// Remove the second item:

// $cars = array("Volvo", "BMW", "Toyota");
// unset($cars[1]);
// var_dump($cars);

// ----------------------------------------------------------------------------------

// Remove Multiple Array Items
// To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete.
// Remove 2 items, starting a the second item (index 1):


// $cars = array("Volvo", "BMW", "Toyota");
// array_splice($cars, 1, 2);
//var_dump($cars);



// ---------------------------------------------------------------------------------------

// Remove the Last Item
// The array_pop() function removes the last item of an array.

// Example
// Remove the last item:

// $cars = array("Volvo", "BMW", "Toyota");
// array_pop($cars);
// var_dump($car);

// ---------------------------------------------------------------------------------------------


// Remove the First Item
// The array_shift() function removes the first item of an array.
// Remove the first item:


// $cars = array("Volvo", "BMW", "Toyota");
// array_shift($cars);
//var_dump($car);

// --------------------------------------------------------------------------------------------------


// TWO-DIMENSIONAL ARRAY....
// Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

// To get access to the elements of the $cars array we must point to the two indices (row and column):



// $cars = array (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
// );
  
// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";



// --------------------------------------------------------------------------------------------------------------------
// We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):



// $cars = array (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
// );
    
// for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cars[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }


// // ---------------------------------------------------------------------------------------------------------------------------------
