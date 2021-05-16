<!DOCTYPE html>
<html>
<body>
<h2> Multidimensional Arrays </h2>
<!-- Contain one or more arrays -->

  <?php
  $grades = array
      (
        array("Remy", 50, 60),
        array("Zac", 40, 25),
        array("Gabri", 18, 35),
        array("Simone", 20, 55)
      );

  echo $grades[0][0].": Test1: ".$grades[0][1].", Test2: ".$grades[0][2].".<br>";
  echo $grades[1][0].": Test1: ".$grades[1][1].", Test2: ".$grades[1][2].".<br>";
  echo $grades[2][0].": Test1: ".$grades[2][1].", Test2: ".$grades[2][2].".<br>";
  echo $grades[3][0].": Test1: ".$grades[3][1].", Test2: ".$grades[3][2].".<br>";

   ?>

</body>
</html>
