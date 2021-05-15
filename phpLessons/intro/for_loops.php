<!DOCTYPE html>
<html>

<body>

  <?php
  /* For loops are used when you know in advance how many times you want the
  code block to execute

  FOR LOOP:
  */

  echo "<hr />";

  for ($x = 0; $x <= 10; $x++) {
    echo "$x <br>";
  }

  echo "<hr />";

  // FOR EACH LOOP
  $cars = array ("Volvo", "BMW", "Honda", "Ford");

  foreach ($cars as $value) {
    echo "$value <br />";
  }

  ?>

</body>

</html>
