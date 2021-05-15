<!DOCTYPE html>
<html>
<body>

  <?php
    // GLOBAL SCOPE EXAMPLE
    $x = 5; // global scope, can only be accessed outside of the function

    function test1() {
      // Will generate error
      echo "<p>Value of x is: $x</p>";
    }
    test1();

    echo "<p>Value of x is: $x</p><hr />"; // Will print

    // LOCAL SCOPE EXAMPLE

    function test2() {
      $y = 5; // local scope, can only be accesse inside of the function
      echo "<p>Value of y is: $y</p>"; // Will print
    }
    test2();

    // Will generate error
    echo "<p>Value of y is: $y</p>";
   ?>


</body>
</html>
