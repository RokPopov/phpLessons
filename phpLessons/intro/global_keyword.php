<!DOCTYPE html>
<html>
<body>
  <?php
    // Global keyword - to access global variables that are inside the function
    $x = 30;
    $y = 20;

    function test1() {
      global $x, $y;
      $y = $x + $y;
    }

    test1(); // execute function
    echo "<p>$y</p><hr />"; // output value of variable y

    //PHP stores global variables in an array: $GLOBALS[index]
    $w = 75;
    $z = 25;

    function test2() {
        $GLOBALS['w'] = $GLOBALS['z'] + $GLOBALS['w'];
    }

    test2(); // execute function
    echo $w; // output variable y;

   ?>
</body>
</html>
