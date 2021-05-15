<!DOCTYPE html>
<html>
<head>
  <title>Constants</title>
</head>
<body>
  <?php
  /* CONSTANTS
    - identifiers for given value
    - cannot be cahnged during the script as a variable can
    - automatically named globally across the script
    - name must start as a letter or underscore
    - doesn't require a dollar sign before the name
  */

  // case-sensitive
  define("WELCOME", "Hello my name is Rok", false); // define(name, value, case-insensitive)
  echo WELCOME;

  echo "<hr />";
  // case-insensitive
  define("WELCOME2", "Hello my name is Zac", true); // define(name, value, case-insensitive)
  echo welcome2;

  echo "<hr />";

  // Constants are GLOBAL
  define("CAR", "VOLVO");

  function myCar() {
    echo CAR;
  }

  myCar();

  ?>

</body>
</html>
