<!DOCTYPE html>
<html>

<body>

  <h2> Functions </h2>

  <?php
  // BASIC FUNCTION
  function displayTxt() {
    echo "Hello Popce";
  }

  displayTxt();

  echo "<hr />";

  // FUNCTION ARGUMENTS

  function myCar($classic, $year) { // pass information with arguments
    echo "$classic - $year<br>";
  }

  myCar("Charger", "1967"); // pass value to the argument
  myCar("Cobra", "1972"); // -||-
  myCar("Firebird", "1964"); // -||-

  /*
  - function names are not case sensitivie in php
  -
  */

  ?>

  <h2> Functions Continued </h2>

  <?php
  // DEFAULT ARGUMENT VALUE

  function myAge($minAge = 31) {
    echo "I am $minAge years old.<br>";
  }

  myAge(); // outputs the default value
  myAge(50); // overrides the default value
  myAge(60); // -||-
  myAge(70); // -||-

  echo "<hr />";

  // RETURNING VALUES

  function add($x, $y) {
    $x = $x + $y; // assign the value of $x + $y to $x
    return $x; // output the result using the return method
  }

  echo "1 + 2 = " . add(1,2) . "<br>";
  echo "3 + 4 = " . add(3,4) . "<br>";
  echo "5 + 5 = " . add(5,5);


   ?>

</body>

</html>
