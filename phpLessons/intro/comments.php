<!DOCTYPE html>
<html>
<body>

    <?php
      echo "Comments and declaring variables: the right and wrong way"
      // Comment
      # Comment
      /*
      First line
      Second line
      Third line
      And so on
      */
      // comments contained inside code
      $x = 10 /* + 5 */ + 20;
      echo $x;
      echo "<hr />";

      ECHO "The right way 1<hr />";
      echo "The right way 2<hr/>";
      ECho "The right way 3<hr/>";

      $car = "Volvo";
      echo "My car is a " . $car . "<br />"; // the right way
      echo "My car is a " . $CAR . "<br />"; // the wrong way
      echo "My car is a " . $cAR . "<br />"; // will also throw an error

     ?>

</body>
</html>
