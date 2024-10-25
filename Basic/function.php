<?php 

// function brij(){
//   echo ("hello Brij....");
// }

// return brij();



// function familyName($fname, $year) {
//   echo "$fname Refsnes. Born in $year <br>";
// }

// familyName("Hege", "1975");
// familyName("Stale", "1978");
// familyName("Kai Jim", "1983");


// PHP Default Argument Value
// The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

// Example
// function setHeight($minheight = 50) {
//   echo "The height is : $minheight <br>";
// }

// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);






// PHP Functions - Returning values
// To let a function return a value, use the return statement:

// Example
// function sum($x, $y) {
//   $z = $x + $y;
//   return $z;
// }

// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);





// Passing Arguments by Reference
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

// Example
// Use a pass-by-reference argument to update a variable:

// function add_five(&$value) {
//   $value += 5;
// }

// $num = 2;
// add_five($num);
// echo $num;




// Variable Number of Arguments
// By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

// The variadic function argument becomes an array.

// Example
// A function that do not know how many arguments it will get:

// function sumMyNumbers(...$x) {
//   $n = 0;
//   $len = count($x);
//   for($i = 0; $i < $len; $i++) {
//     $n += $x[$i];
//   }
//   return $n;
// }

// $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
// echo $a;



