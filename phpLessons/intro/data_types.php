<!DOCTYPE html>
<html>
<body>
<?php
  // PHP Data Types: string / integer / float / NULL / boolean / array / object

  // STRING
  $x = "Hello Popce"; // declare string variable usign single or double quotes
  $y = 'Hello Popce';
  echo $x;
  echo "<br>";
  echo $y;
  echo "<hr />";

  // INTEGER
  $num = 6000;
  var_dump($num); // output the datatype in value
  echo "<hr />";

  // FLOAT
  $num2 = 20.565;
  var_dump($num2);
  echo "<hr />";

  // ARRAY
  $sports = array("Soccer","Tennis","Baseball","Football"); // declare variable as array
  var_dump($sports); // output each value in the array
  echo "<hr />";

  // NULL
  $color = "Blue";
  $color = null; // empty value of existing variable
  var_dump($color);
  echo "<br>";

  // BOOLEAN
  $x = true;
  $y = false;
  var_dump($x);
  echo"<br>";
  var_dump($y);

  /* FALSE boolean values:
  - integer 0
  - float 0.0
  - empty stinrg, and the string with "0"
  - array with 0 elements
  - NULL variables
  - (almost) any other value would be considered TRUE
  */


 ?>


</body>
</html>
