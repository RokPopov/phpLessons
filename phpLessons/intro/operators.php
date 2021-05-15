<!DOCTYPE html>
<html>
<head>
  <title>Operators</title>
</head>
<body>
  <h2> Php Arithmetic Operators </h2>
  <!-- Used to compare two values -->

  <?php
  // Operators are used to perform various operations on variables and values
  $x = 50;
  $y = 20;

  // ADDITION
  echo $x + $y;
  echo "<hr />";

  // MULTIPLICATION
  echo $x  * $y;
  echo "<hr />";

  //DIVISION
  echo $x / $y;
  echo "<hr />";

  // MODULUS
  echo $x % $y;

  ?>

<h2> PHP Assignment Operator </h2>
<!-- Used with numeric values to write values to a variable -->

<?php
  // The left opearand is assigned the value on the right
  $x = 20;
  echo $x;

 ?>

 <h2> Comparison operators </h2>
 <!-- Used to compare two values (number to a string) -->
 <?php
 // Equal
 $x = 300;
 $y = "300";
 var_dump($x == $y); // output true - x = y
 echo "<hr />";

 // Identical
 $x = 300;
 $y = "300";
 var_dump($x === $y); // output false - datatypes are not equal
 echo "<hr />";

 // Not equal
 $x = 300;
 $y = "300";
 var_dump($x != $y); // output false - values not equal
 echo "<hr />";

 // Not equal
 $x = 300;
 $y = "300";
 var_dump($x <> $y); // output false - values not equal
 echo "<hr />";

 // Not identical
 $x = 300;
 $y = "300";
 var_dump($x !== $y); // output false - datatypes not equal
 echo "<hr />";

 // Greater than
 $x = 300;
 $y = "500";
 var_dump($x > $y); // output false - x not greater than y
 echo "<hr />";

 // Greater than
 $x = 300;
 $y = "500";
 var_dump($x < $y); // output true - x < y
 echo "<hr />";

 // Greater than or equal to
 $x = 300;
 $y = "500";
 var_dump($x >= $y); // output false - x < y
 echo "<hr />";

 // Less than or equal to
 $x = 300;
 $y = "500";
 var_dump($x <= $y); // output true - x < y
 echo "<hr />";

 ?>

 <h2> Increment operators </h2>
 <!-- Used to increment or decrement a variables value -->

 <?php
 // Post-increment - returns $x, then increment $x by 1
 $x = 50;
 echo $x++;
 echo "<hr />";

 // Pre-increment - increment $x by 1, then returns $x
 $x = 50;
 echo ++$x;
 echo "<hr />";

 // Pre-decrement - decrement by 1, then returns $x
 $x = 50;
 echo --$x;
 echo "<hr />";

 // Post-decrement - returns $x. then decrements by 1
 $x= 50;
 echo $x--;

  ?>

  <h2> Logical operators </h2>
  <!-- used to combine conditional statements -->

  <?php
  // And - true if both $x and $y are true
  $x = 200;
  $y = 300;

  if ($x == 200 and $y == 300) {
    echo "True";
    echo "<hr />";
  }

  // Or - True if both $x and $y are true
  $x = 200;
  $y = 300;

  if ($x == 200 or $y = 90) {
    echo "True";
    echo "<hr />";
  }

  // And - && - True if both $x and $y are true
  $x = 200;
  $y = 300;

  if ($x == 200 && $y == 300) {
    echo "True";
    echo "<hr />";
  }

  // Or - $x || $y - True if either $x or $y is true
  $x = 200;
  $y = 300;

  if ($x == 200 || $y == 100) {
    echo "True";
    echo "<hr />";
  }

  // Not - !$x - True if $x not true
  $x = 200;
  $y = 300;

  if ($x !== 100) {
    echo "True";
    echo "<hr />";
  }

   ?>

   <h2> PHP string operators </h2>
   <!-- Used specifically for strings -->

   <?php
   // Concatenation - concatenation of $x and $y
   $x = "Hello";
   $y = " world";
   echo $x . $y;
   echo "<hr />";

   // Concatenation assignment - Appends $txt2 to $txt1
   $x = "Remy";
   $y = " Felinski";
   $x .= $y;
   echo $x;
   echo "<hr />";

    ?>

    <h2> PHP array operators </h2>
    <!-- Used to compare Arrays -->

    <?php
    // Union - union of $x and $y
    $x = array("a" => "black", "b" => "grey");
    $y = array("c" => "dark black", "d" => "dark grey");

    print_r($x + $y); // Union
    echo "<hr />";

    // Equality - Returns true if $x and $y have the same key/value pairs
    $x = array("a" => "black", "b" => "grey");
    $y = array("a" => "dark black", "d" => "dark grey");

    var_dump($x == $y);
    echo "<hr />";

    // Identity - Returns true if $x and $y have the same key/value pairs in the same order and of the same type
    $x = array("a" => "black", "b" => "grey");
    $y = array("a" => "dark black", "d" => "dark grey");

    var_dump($x === $y);
    echo "<hr />";

    // Inequality - Returns true if $x is not equal to $y
    $x = array("a" => "black", "b" => "grey");
    $y = array("a" => "dark black", "d" => "dark grey");

    var_dump($x != $y);
    echo "<hr />";

    // Inequality - Returns true if $x is not equal to $y
    $x = array("a" => "black", "b" => "grey");
    $y = array("a" => "dark black", "d" => "dark grey");

    var_dump($x <> $y);
    echo "<hr />";

    // Non-identity - Returns true if $x is not identical to $y
    $x = array("a" => "black", "b" => "grey");
    $y = array("a" => "dark black", "d" => "dark grey");

    var_dump($x !== $y);
    echo "<hr />";


     ?>

</body>
</html>
