<!DOCTYPE html>
<html>
<head>
  <title>Conditional statements</title>
</head>
<body>
  <?php
  // Compares the value of an expression against a set of predefined conditions(also cases)
  $car = NULL;
  
  switch ($car) {
    case "Volvo":
      echo "You drive a Volvo";
      break;
    case "BMW";
      echo "You drive a BMW";
      break;
    case "VW";
      echo "You drive a VW";
      break;
    default:
      echo "You don't drive";
  }

  ?>

</body>
</html>
