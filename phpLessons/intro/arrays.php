<!DOCTYPE html>
<html>
<body>
<h2> Arrays </h2>
<!-- Variables used to store multiple values (indexed arrays, associative arrays and multidimensional arrays) -->

  <?php

  // INDEXED ARRAY
  $colors = array("Black", "Grey", "White");
  echo "My favorite colors are: " . $colors[0] . ", " . $colors[1] . ", and " . $colors[2] . "<hr />"; // each value in array referenced by index number

  // ARRAY LENGTH
  echo count($colors) . "<hr />";

  // LOOP THROUGH AN INDEXED ARRAY
  $arrLength = count($colors); // count function returns the length of nr. of values in an array

  for ($x = 0; $x < $arrLength; $x++) { // value of x starts at 0, increments by 1 up to the length of the array
    echo $colors[$x] . "<br>";
  }

  echo "<hr />";

  // ASSOCIATIVE ARRAYS
  $tscore = array("Remy" => "50", "Zac" => "60", "Gabri" => "70");
  echo "Gabri scored: " . $tscore["Gabri"] . " /100.";
  echo "<hr />";

  // LOOP THROUGH AN ASSOCIATIVE ARRAY
  foreach($tscore as $i => $score) {
    echo "Key=" . $i . ", Score=" . $score;
    echo"<br>";
  }

   ?>

</body>
</html>
