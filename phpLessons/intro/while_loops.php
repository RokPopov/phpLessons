<!DOCTYPE html>
<html>

<body>

  <?php
  /* Types of loops in PHP:
  - while loops
  - do...while loops
  - for loops
  - foreach loops

    WHILE LOOP: */
   $x = 1;

   while ($x < 10) {
     echo "The number is: $x <br>";
     $x++;
   }
   echo "<hr />";

   // DO WHILE LOOP
   $x = 10;
   do {
     echo "The number is: $x <br>";
     $x++;
   } while ($x <= 50);
  ?>

</body>

</html>
