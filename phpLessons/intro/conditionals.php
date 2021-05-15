<!DOCTYPE html>
<html>
<head>
  <title>Conditional statements</title>
</head>
<body>
  <?php
  /*
  Types of conditional statemets:
  - If
  - If-else
  - If-else-elseif
  - Switch

  IF STATEMENT:
  */
  $x = 49;

  if ($x < 50) {
    echo "Condition met";
  }

  echo "<hr />";

  # Condition not met
  $y = 51;

  if ($y < 50) {
    echo "Condition met";
  } else {
    echo "Condition not met";
  }

  ?>

</body>
</html>
